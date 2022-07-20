<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('UserModel');
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('profil');
        $this->load->model('Model_Lapak');
        $this->load->model('Model_Peminjaman');
        $this->load->model('properti_katalog_model');
    }

    public function index()
    {
        //$this->load->view('Frontend/index');

        $this->load->database();
        $jumlah_data = $this->properti_katalog_model->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/frontend/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 12;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['user'] = $this->properti_katalog_model->data($config['per_page'], $from);
        $this->load->view('Frontend/index', $data);
    }

    public function detail_properti($id)
    {
        $product = $this->Model_Lapak;
        $data["data"] = $product->getkatalog($id);
        $this->load->view('frontEnd/detail_property', $data);
    }

    public function transaksi_sewa($id)
    {
        $product = $this->Model_Lapak;
        //$data["data1"] = $product->getById4($id);
        $data = [
            "data1" => $product->getById4($id),
            "invoice" => $this->Model_Peminjaman->get_no_invoice(),
        ];

        //var_dump($data);
        // die;
        $this->load->view('FrontEnd/transaksi_sewa', $data);
    }

    public function tambah_properti($id)
    {
        $product = $this->Model_Lapak;
        $data["data"] = $product->getById($id);
        $this->load->view('frontEnd/detail_property', $data);
    }

    public function cari()
    {
        $keyword = $this->input->post('cari');
        $data['user'] = $this->Model_Lapak->get_cari($keyword);

        $this->load->view('Frontend/index_cari', $data);
    }

    public function cari_rumah()
    {
        $keyword = '1';
        $data['user'] = $this->Model_Lapak->get_cari_kategori($keyword);

        $this->load->view('Frontend/index_cari', $data);
    }

    public function cari_tanah()
    {
        $keyword = '2';
        $data['user'] = $this->Model_Lapak->get_cari_kategori($keyword);

        $this->load->view('Frontend/index_cari', $data);
    }

    public function cari_ruko()
    {
        $keyword = '3';
        $data['user'] = $this->Model_Lapak->get_cari_kategori($keyword);

        $this->load->view('Frontend/index_cari', $data);
    }
}
