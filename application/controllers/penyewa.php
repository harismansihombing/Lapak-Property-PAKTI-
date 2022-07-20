<?php

class Penyewa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Pengguna');
        $this->load->model('Model_Peminjaman');
        $this->load->model('Model_Detail_Peminjaman');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function index($id = null)
    {
        $data['user'] = $this->Model_Pengguna->tampil_data($id);
        $this->load->view('penyewa/index', $data);
    }


    public function tampil_akun($id = null)
    {
        if (!isset($id)) redirect('welcome/index');

        $product = $this->Model_Pengguna;
        $data["user"] = $product->tampil_data($id);
        if (!$data["user"]) show_404();

        $this->load->view("penyewa/index", $data);
    }

    // Sesi Fitur Profil ================================================================
    public function tampil_profil($id = null)
    {
        if (!isset($id)) redirect('welcome/index');

        $product = $this->Model_Pengguna;
        $data["user"] = $product->tampil_data($id);
        if (!$data["user"]) show_404();

        $this->load->view("penyewa/profil", $data);
    }


    public function edit_profil($id = null)
    {
        if (!isset($id)) redirect('frontend');

        $product = $this->Model_Pengguna;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->edit_profil();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $product->tampil_data($id);
        if (!$data["user"]) show_404();

        //$this->load->view("penyewa/profil", $data);
    }

    // ==================================================================================

    public function detail_sewa($id)
    {
        $product = $this->Model_Pengguna;
        $data["user"] = $product->tampil_data($id);
        $this->load->view("penyewa/detail_sewa", $data);
    }

    public function transaksi_kosong($id)
    {
        $product = $this->Model_Pengguna;
        $data["user"] = $product->tampil_data($id);
        $this->load->view("penyewa/transaksi_kosong", $data);
    }
    public function detail_riwayat_sewa($id)
    {
        $product = $this->Model_Pengguna;
        $data["user"] = $product->tampil_data($id);
        //var_dump($data);
        //die;

        if (!isset($id)) redirect('welcome/index');

        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "hasil" => $this->Model_Peminjaman->getById7($id),
            //"hasil1" => $this->Model_Detail_Peminjaman->getById3($id2),
            "invoice" => $this->Model_Detail_Peminjaman->get_no_invoice(),
        ];


        $this->load->view("penyewa/detail_riwayat_sewa", $data);
    }

    public function riwayat_sewa($id)
    {
        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "riwayat_sewa" => $this->Model_Peminjaman->getById10($id),
        ];
        $this->load->view("penyewa/riwayat_sewa", $data);
    }

    public function buka_toko($id)
    {
        $product = $this->Model_Pengguna;
        $data["user"] = $product->tampil_data($id);
        $this->load->view("penyewa/buka_toko", $data);
    }
    public function buat_lapak_info()
    {
        //if (!isset($id)) redirect('welcome/index');

        //$product = $this->Model_Pengguna;
        //$data["user"] = $product->tampil_data($id);
        //if (!$data["user"]) show_404();

        $this->load->view("penyewa/buat_lapak_info");
    }

    public function sewa_properti_tambah($id)
    {
        $product = $this->Model_Peminjaman;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        //$data["user"] = $this->Model_Pengguna->tampil_data($id);

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('penyewa/tampil_transaksi_kosong/' . $id); // Redirect ke halaman detail transaksi
        //$this->load->view("frontend/index");
    }

    public function tampil_transaksi_kosong($id = null)
    {
        if (!isset($id)) redirect('welcome/index');

        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "hasil" => $this->Model_Peminjaman->getById6($id),
            "hasil1" => $this->Model_Peminjaman->getdisewa($id),

        ];

        $this->load->view("penyewa/transaksi_kosong", $data);
    }

    // Sesi Detail sewa ===========================================================
    public function tampil_detail_sewa($id, $id2)
    {
        if (!isset($id)) redirect('welcome/index');

        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "hasil" => $this->Model_Peminjaman->getById7($id),
            "hasil1" => $this->Model_Detail_Peminjaman->getById3($id2),
            "invoice" => $this->Model_Detail_Peminjaman->get_no_invoice(),
        ];

        $this->load->view("penyewa/detail_sewa", $data);
    }

    public function tampil_detail_sewa_pending($id, $id2)
    {
        if (!isset($id)) redirect('welcome/index');

        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "hasil" => $this->Model_Peminjaman->getById77($id),
            //"hasil1" => $this->Model_Detail_Peminjaman->getById3($id2),
            "invoice" => $this->Model_Detail_Peminjaman->get_no_invoice(),
        ];


        $this->load->view("penyewa/detail_sewa_pending", $data);
    }

    public function detail_sewa_tambah($id, $id2)
    {
        $model = $this->Model_Detail_Peminjaman;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if ($validation->run()) {
            $model->save_detail_sewa();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "hasil" => $this->Model_Peminjaman->getById7($id),
            "hasil1" => $this->Model_Detail_Peminjaman->getById3($id2),
            "invoice" => $this->Model_Detail_Peminjaman->get_no_invoice(),
        ];

        $this->load->view("penyewa/detail_sewa", $data);
    }

    public function upload($id = null)
    {
        $product = $this->Model_Pengguna;
        $data = [
            "user" => $product->tampil_data($id),
            "hasil" => $this->Model_Peminjaman->getById6($id),
            "hasil1" => $this->Model_Peminjaman->getById7($id),

        ];

        $this->load->view('penyewa/upload', $data);
    }


    // =========================================================================
}
