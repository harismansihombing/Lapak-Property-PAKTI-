<?php

class Crud extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('profil');
        $this->load->model('propertimodel');
        $this->load->model('data_peminjaman_model');
        $this->load->model('detail_peminjaman_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data['user'] = $this->profil->tampil_data();
        $this->load->view('pemilik/index', $data);
    }

    public function tampil_akun($id = null)
    {
        if (!isset($id)) redirect('welcome/index');

        $product = $this->profil;
        $data["user"] = $product->getById($id);
        if (!$data["user"]) show_404();

        $this->load->view("pemilik/index", $data);
    }

    function daftar_postingan($id = null)
    {
        //$data['user'] = $this->propertimodel->tampil_data()->result();
        // $this->load->view('pemilik/daftar_postingan', $data);
        $a = $id;
        if (!isset($id)) redirect('welcome/index');

        $product = $this->propertimodel;
        $data["user"] = $product->getById($id);
        if (!$data["user"]) {
            //show_404();
            $this->load->view("pemilik/daftar_postingan_kosong");
        } else {
            $this->load->view("pemilik/daftar_postingan", $data);
        }
    }

    public function tambah_postingan()
    {
        $product = $this->propertimodel;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("pemilik/tambah_postingan");
    }

    public function delete_postingan($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->propertimodel->delete($id)) {
            redirect(site_url('crud/daftar_postingan'));
        }
    }

    public function edit_postingan($id = null)
    {
        if (!isset($id)) redirect('welcome');

        $product = $this->propertimodel;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $product->getById2($id);

        if (!$data["user"]) show_404();

        $this->load->view("pemilik/edit_postingan", $data);
    }


    function daftar_data_penyewa($id = null)
    {

        if (!isset($id)) redirect('welcome/index');

        $product = $this->data_peminjaman_model;
        $data["user"] = $product->getById2($id);
        if (!$data["user"]) {
            //show_404();
            $this->load->view("pemilik/daftar_data_penyewa_kosong");
        } else {
            $this->load->view("pemilik/daftar_data_penyewa", $data);
        }
    }

    public function daftar_data_penyewa_tambah($id)
    {
        if (!isset($id)) redirect('welcome/index');

        $x = $this->data_peminjaman_model->get_no_invoice();

        $kd_properti = $this->propertimodel;
        $data = [
            "data" => $kd_properti->getById($id),
            "invoice" => $this->data_peminjaman_model->get_no_invoice(),
        ];


        $this->load->view("pemilik/daftar_data_penyewa_tambah", $data);
    }

    public function daftar_data_penyewa_create()
    {
        $model = $this->data_peminjaman_model;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if ($validation->run()) {
            $model->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("pemilik/daftar_data_penyewa_tambah");
    }

    function daftar_detail_data_penyewa($id = null)
    {
        if (!isset($id)) redirect('welcome/index');

        $product = $this->detail_peminjaman_model;
        $data["user"] = $product->getById2($id);

        if (!$data["user"]) {
            $this->load->view("pemilik/daftar_detail_data_penyewa_kosong");
        } else {
            $this->load->view("pemilik/daftar_detail_data_penyewa", $data);
        }
    }

    public function daftar_detail_data_penyewa_parsing($id)
    {
        if (!isset($id)) redirect('welcome/index');

        $kd_peminjaman = $this->data_peminjaman_model;
        $data1 = [
            "data" => $kd_peminjaman->getById3($id),
            "invoice" => $this->data_peminjaman_model->get_no_invoice(),
        ];

        $this->load->view("pemilik/daftar_detail_data_penyewa_tambah", $data1);
    }

    public function daftar_detail_data_penyewa_tambah()
    {
        $model = $this->detail_peminjaman_model;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if ($validation->run()) {
            $model->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("pemilik/daftar_detail_data_penyewa_tambah");
    }

    public function daftar_detail_data_penyewa_edit($id = null)
    {
        if (!isset($id)) redirect('welcome');

        $product = $this->detail_peminjaman_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["peminjaman"] = $product->getById3($id);


        if (!$data["peminjaman"]) show_404();

        $this->load->view("pemilik/daftar_detail_data_penyewa_edit", $data);
    }

    public function daftar_detail_data_penyewa_delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->detail_peminjaman_model->delete($id)) {
            redirect(site_url('crud/daftar_detail_data_penyewa'));
        }
    }
}
