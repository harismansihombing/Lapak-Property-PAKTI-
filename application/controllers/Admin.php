<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
    {
        parent::__construct();
        $this->load->model('Model_penyewa');
        $this->load->model('Model_pemilik');
        $this->load->model('Model_postingan');
        $this->load->model('Model_verifikasi');
    }

    public function index()
    {
        $this->load->view('admin/index');
    }

    public function pendaftar()
    {

        //$this->load->model('Model_penyewa');
        $data['penyewa'] = $this->Model_penyewa->getPenyewa();
    	$this->load->view('admin/pendaftar', $data);

        //$product = $this->Model_penyewa;
        //$data["penyewa"] = $product->getPenyewa();
        //$this->load->view("admin/pendaftar", $data);
    }

    public function hapusPenyewa($id = null)
    {
        //$this->Model_penyewa->hapusDataPenyewa($id);
        //redirect('admin/pendaftar');
        if ($this->Model_penyewa->hapusDataPenyewa($id));
        redirect(site_url('admin/pendaftar'));
    }

    public function terima_penyewa($id)
    {
        $data['terima_penyewa'] = $this->Model_penyewa->terimaPenyewa($id);
        redirect('Admin/pendaftar');
        //$this->load->view('admin/detail_akun_terdaftar', $data);
    }

    public function detail_pendaftar($id)
    {
        $data['penyewa'] = $this->Model_penyewa->getPenyewaById($id);
        $this->load->view('admin/detail_pendaftar', $data);
    }

    public function akun_terdaftar()
    {
        $data['pemilik'] = $this->Model_pemilik->getPemilik();
    	$this->load->view('admin/akun_terdaftar', $data);
    }

    public function detail_akun_terdaftar($id)
    {
        $data['pemilik'] = $this->Model_pemilik->getPemilikById($id);
        $this->load->view('admin/detail_akun_terdaftar', $data);
    }

    public function hapusPemilik($id = null)
    {
        if ($this->Model_pemilik->hapusDataPemilik($id));
        redirect(site_url('admin/akun_terdaftar'));
    }

    public function postingan()
    {
        $data['postingan'] = $this->Model_postingan->getPostingan();
    	$this->load->view('admin/postingan', $data);
    }

    public function detail_postingan($id)
    {
        $data['postingan'] = $this->Model_postingan->getPostinganById($id);
        $this->load->view('admin/detail_postingan', $data);
    }

    public function terima_postingan($id)
    {
        $data['terima_postingan'] = $this->Model_postingan->terimaPostingan($id);
        redirect('Admin/postingan');
        //$this->load->view('admin/detail_akun_terdaftar', $data);
    }

    public function hapusPostingan($id = null)
    {
        if ($this->Model_postingan->hapusDataPostingan($id));
        redirect(site_url('admin/postingan'));
    }

    public function verifikasi_postingan()
    {
        $data['verifikasi'] = $this->Model_verifikasi->getVerifikasi();
        $this->load->view('admin/verifikasi_postingan', $data);
    }

    public function detail_verifikasi($id)
    {
        $data['verifikasi'] = $this->Model_verifikasi->getVerifikasiById($id);
        $this->load->view('admin/detail_verifikasi', $data);   
    }

    public function hapusVerifikasi($id = null)
    {
        if ($this->Model_verifikasi->hapusDataVerifikasi($id));
        redirect(site_url('admin/verifikasi_postingan'));
    }
	
}
