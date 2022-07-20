<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('profil');
		$this->load->model('propertimodel');
		$this->load->model('detail_peminjaman_model');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('Frontend/index');
	}
	public function contoh()
	{
		$this->load->view('admin/dasboard/blank');
	}
	public function login()
	{
		$this->load->view('Frontend/login');
	}
	public function daftar()
	{
		$this->load->view('Frontend/register');
	}
	public function profil()
	{
		$this->load->view('Frontend/profil');
	}
	public function register()
	{
		$this->load->view('Frontend/register');
	}
	public function properti_anda()
	{
		$this->load->view('pemilik/index');
	}
	public function daftar_postingan()
	{
		$this->load->view('pemilik/daftar_postingan');
	}
	public function tambah_postingan()
	{
		$x['invoice'] = $this->propertimodel->get_no_invoice();
		//$this->load->view('pemilik/tambah_postingan');
		$this->load->view('pemilik/tambah_postingan', $x);
	}
	public function daftar_data_penyewa()
	{
		$this->load->view('pemilik/daftar_data_penyewa');
	}
	public function daftar_data_penyewa_tambah()
	{
		$this->load->view('pemilik/daftar_data_penyewa_tambah');
	}
	public function index_penyewa()
	{
		$this->load->view('penyewa/index');
	}
	public function profil_penyewa()
	{
		$this->load->view('penyewa/profil');
	}
}
