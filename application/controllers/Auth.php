<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('UserModel');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            redirect('page/home'); // Redirect ke page home

        // function render_login tersebut dari file core/MY_Controller.php

        $this->load->view('Frontend/login'); // Load view login.php
    }

    public function login()
    {
        $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
        $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

        $user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php

        if (empty($user)) { // Jika hasilnya kosong / user tidak ditemukan
            $this->session->set_flashdata('message', 'Username Atau Password Salah'); // Buat session flashdata
            redirect('auth'); // Redirect ke halaman login
        } else {
            if ($password == $user->password) { // Jika password yang diinput sama dengan password yang didatabase
                $session = array(
                    'authenticated' => true, // Buat session authenticated dengan value true
                    'username' => $user->username,  // Buat session username
                    'nama' => $user->nama_pengguna, // Buat session nama
                    'role' => $user->role, // Buat session role
                    'kd_pengguna' => $user->kd_pengguna, // Buat session role
                );

                $this->session->set_userdata($session); // Buat session sesuai $session
                //redirect('page/home'); // Redirect ke halaman home
                redirect(site_url('frontend/index'));
            } else {
                $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
                redirect('auth'); // Redirect ke halaman login
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy(); // Hapus semua session
        //redirect('welcome'); // Redirect ke halaman login
        redirect(site_url('frontend/index'));
    }

    public function daftar()
    {

        $this->form_validation->set_rules('nama_pengguna', 'Nama', 'required|trim');
        $this->form_validation->set_rules('NIK_pengguna', 'NIK', 'required|trim');
        $this->form_validation->set_rules('alamat_pengguna', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_pengguna', 'No_pengguna', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tabel_pengguna.email]', [
            'is_unique' => 'Email Sudah Terdaftar'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tabel_pengguna.username]', [
            'is_unique' => 'Username Sudah Terdaftar'
        ]);
        $this->form_validation->set_rules('password', 'Passsword', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Cocok',
            'min_length' => 'Password Minimal  6 Karakter'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        //$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');

        $simpan = $this->UserModel;
        if ($this->form_validation->run() === FALSE) {
            //$this->load->view('FrontEnd/login');
            // Encrypt password
            //$enc_password = md5($this->input->post('password'));

            //$this->UserModel->register($enc_password);

            // Set message
            //$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

            //redirect('welcome/login');
            //redirect(site_url('welcome/daftar'));
            //echo 'ggl';
            $this->load->view('frontend/register');
        } else {
            // Encrypt password
            $simpan->register();
            $this->session->set_flashdata('message', 'Registrasi Berhasil Silahkan Login Untuk Melanjutkan');
            redirect('auth');
            // Set message
            // $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

            //redirect('welcome/login');

        }
    }
}
