<?php 

class Model_pemilik extends CI_model
{

	private $_table = "tabel_pengguna";

	public $kd_pengguna;
	public $NIK_pengguna;
	public $nama_pengguna;
	public $alamat_pengguna;
	public $no_pengguna;
	public $email;
	public $foto_ktp;
	public $foto_diri_dan_ktp;
	public $foto_profil;
	public $username;
	public $password;
	public $role;

	public function getAllPemilik()
	{
		$query = $this->db->get('tabel_pengguna');
		return $query->result_array();
	}

	public function getPemilik()
    {
    	$pemilik = 'pemilik';
        return $this->db->get_where($this->_table, ["role" => $pemilik])->result();
    }

    public function hapusDataPemilik($id)
    {
    	return $this->db->delete($this->_table, array("kd_pengguna" => $id));
    }

    public function getPemilikById($id)
    {
    	//$pemilik = 'pemilik';
    	//return $this->db->get_where('tabel_pengguna', ['kd_pengguna' => $id])->result();
    	$pemilik = 'pemilik';
    	//return $this->db->get_where($this->_table, ['kd_pengguna' => $id])->result();
    	return $this->db->get_where('tabel_pengguna', ['kd_pengguna' => $id])->result();
    }

}