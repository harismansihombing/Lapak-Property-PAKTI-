<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
    private $_table = "tabel_pengguna";

    public $kd_pengguna;
    public $NIK_pengguna;
    public $nama_pengguna;
    public $alamat_pengguna;
    public $no_pengguna;
    public $email;
    public $foto_ktp = "default.jpg";
    public $foto_diri_dan_ktp = "default.jpg";
    public $foto_profil = "default.jpg";
    public $username;
    public $password;
    public $role;

    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('tabel_pengguna')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }

    public function register()
    {
        $enc_password = md5($this->input->post('password'));
        $role = "penyewa";
        $post = $this->input->post();
        $this->NIK_pengguna = $post["NIK_pengguna"];
        $this->nama_pengguna = $post["nama_pengguna"];
        $this->alamat_pengguna = $post["alamat_pengguna"];
        $this->no_pengguna = $post["no_pengguna"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = $enc_password;
        $this->role = $role;

        return $this->db->insert($this->_table, $this);
    }

    // Check username exists
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}
