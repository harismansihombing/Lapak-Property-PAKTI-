<?php

class Pemilik extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Pengguna');
        $this->load->model('Model_Lapak');
        $this->load->model('Model_Peminjaman');
        $this->load->model('Model_Detail_Peminjaman');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function index($id = null)
    {
        $data['user'] = $this->Model_Pengguna->tampil_data($id);
        $this->load->view('pemilik/index', $data);
    }

    public function buka_toko($id)
    {
        $product = $this->Model_Pengguna;
        $data["user"] = $product->tampil_data($id);
        $this->load->view("penyewa/buka_toko", $data);
    }

    public function lapak_saya($id)
    {
        $product = $this->Model_Pengguna;
        $data["user"] = $product->tampil_data($id);
        $this->load->view("pemilik/lapak_saya", $data);
    }


    // Sesi Daftar Postingan ===========================================================
    public function daftar_postingan($id)
    {
        if (!isset($id)) redirect('welcome/index');
        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "lapak" => $this->Model_Lapak->getById2($id),
        ];
        $this->load->view("pemilik/daftar_postingan", $data);
    }

    public function edit_daftar_postingan($id = null)
    {
        if (!isset($id)) redirect('frontend');

        $product = $this->Model_Lapak;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->edit_postingan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data = [
            "user" => $this->Model_Pengguna->tampil_data($id),
            "data_postingan" => $product->get_kode_pengguna_edit($id),
        ];

        $this->load->view("pemilik/detail_daftar_postingan", $data);
    }

    public function hapus_daftar_postingan($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Model_Lapak->delete_postingan($id)) {
            $id2 = $this->uri->segment('4');
            $data['user'] = $this->Model_Pengguna->tampil_data($id2);
            redirect(base_url('pemilik/daftar_postingan',  $data));
        }
    }


    //===================================================================================


    // Sesi Tambah Postingan ===========================================================
    public function tambah_postingan_rumah($id)
    {
        if (!isset($id)) redirect('welcome/index');
        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "invoice" => $this->Model_Lapak->get_no_invoice(),
            "lapak" => $this->Model_Lapak->getById2($id),
        ];

        $this->load->view("pemilik/tambah_postingan_rumah", $data);
    }

    public function tambah_postingan_ruko($id)
    {
        if (!isset($id)) redirect('welcome/index');
        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "invoice" => $this->Model_Lapak->get_no_invoice(),
        ];
        $this->load->view("pemilik/tambah_postingan_ruko", $data);
    }

    public function tambah_postingan_tanah($id)
    {
        if (!isset($id)) redirect('welcome/index');
        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "invoice" => $this->Model_Lapak->get_no_invoice(),
        ];
        $this->load->view("pemilik/tambah_postingan_tanah", $data);
    }

    public function edit_postingan($id)
    {
        $product = $this->Model_Pengguna;
        $data["user"] = $product->tampil_data($id);
        $this->load->view("pemilik/edit_postingan", $data);
    }


    public function save_postingan_ruko($id)
    {
        $model1 = $this->Model_Pengguna;
        $model = $this->Model_Lapak;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if ($validation->run()) {
            $model->save_ruko();
            $this->session->set_flashdata('success', 'Berhasil disimpan');

            $data = [
                "user" => $model1->tampil_data($id),
                "lapak" => $this->Model_Lapak->getById2($id),
            ];

            $this->load->view("pemilik/daftar_postingan", $data);
        }
    }

    public function save_postingan_rumah($id)
    {
        $model1 = $this->Model_Pengguna;
        $model = $this->Model_Lapak;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if ($validation->run()) {
            $model->save_rumah();
            $this->session->set_flashdata('success', 'Berhasil disimpan');

            $data = [
                "user" => $model1->tampil_data($id),
                "lapak" => $this->Model_Lapak->getById2($id),
            ];

            $this->load->view("pemilik/daftar_postingan", $data);
        }
    }

    public function save_postingan_tanah($id)
    {
        $model1 = $this->Model_Pengguna;
        $model = $this->Model_Lapak;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if ($validation->run()) {
            $model->save_tanah();
            $this->session->set_flashdata('success', 'Berhasil disimpan');

            $data = [
                "user" => $model1->tampil_data($id),
                "lapak" => $this->Model_Lapak->getById2($id),
            ];

            $this->load->view("pemilik/daftar_postingan", $data);
        }
    }
    //===============================================================================


    // Sesi Daftar Penyewa ==========================================================
    public function daftar_penyewa($id)
    {
        if (!isset($id)) redirect('welcome/index');
        $product = $this->Model_Pengguna;

        $data = [
            "user" => $product->tampil_data($id),
            "peminjaman" => $this->Model_Peminjaman->getById2($id),
            "peminjaman_pending" => $this->Model_Peminjaman->getById9($id),
        ];

        //var_dump($data);
        //die;

        $this->load->view("pemilik/daftar_penyewa", $data);
    }

    public function detail_daftar_penyewa($id)
    {
        if (!isset($id)) redirect('welcome/index');
        $kd_pengguna = $this->uri->segment(3);
        $kd_peminjaman = $this->uri->segment(4);
        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($kd_pengguna),
            "peminjaman" => $this->Model_Detail_Peminjaman->getById2($kd_peminjaman),
            "properti" => $this->Model_Peminjaman->getById5($kd_peminjaman)
        ];

        $this->load->view("pemilik/detail_daftar_penyewa", $data);
    }

    public function detail_daftar_penyewa_pending($id)
    {
        if (!isset($id)) redirect('welcome/index');
        $kd_pengguna = $this->uri->segment(3);
        $kd_peminjaman = $this->uri->segment(4);
        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($kd_pengguna),
            "peminjaman" => $this->Model_Detail_Peminjaman->getById2($kd_peminjaman),
            "properti" => $this->Model_Peminjaman->getById5($kd_peminjaman),
            "peminjaman_pending" => $this->Model_Peminjaman->getById9($id),
        ];

        // var_dump($data);
        //die;

        $this->load->view("pemilik/detail_daftar_penyewa_pending", $data);
    }

    public function detail_daftar_penyewa_pending_tolak($id)
    {
        if (!isset($id)) redirect('welcome');
        $kd_pengguna = $this->uri->segment(3);
        $product = $this->Model_Peminjaman;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->tolak_penawaran();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $this->Model_Pengguna->tampil_data($kd_pengguna);

        $this->load->view("frontend", $data);
    }

    public function detail_daftar_penyewa_pending_terima($id)
    {
        if (!isset($id)) redirect('welcome');
        $kd_pengguna = $this->uri->segment(3);
        $product = $this->Model_Peminjaman;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->terima_penawaran();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $this->Model_Pengguna->tampil_data($kd_pengguna);

        $this->load->view("frontend", $data);
    }
}
