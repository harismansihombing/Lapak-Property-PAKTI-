<?php 

class Model_penyewa extends CI_model
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


	public function getAllPenyewa()
	{
		$query = $this->db->get('tabel_pengguna');
		return $query->result_array();
	}

	public function getPenyewa()
    {
    	$penyewa = 'penyewa';
        return $this->db->get_where($this->_table, ["role" => $penyewa])->result();
    }

    public function hapusDataPenyewa($id)
    {
    	//$this->db->where('kd_pengguna', $id);
    	//$this->db->delete('tabel_pengguna');

    	return $this->db->delete($this->_table, array("kd_pengguna" => $id));
    }

    public function getPenyewaById($id)
    {
    	//$penyewa = 'penyewa';
    	//return $this->db->get_where($this->_table, ['kd_pengguna' => $id])->result();
    	return $this->db->get_where('tabel_pengguna', ['kd_pengguna' => $id])->result();
    }

    public function terimaPenyewa($id)
    {
    	$this->db->where('kd_pengguna', $id);
    	$this->db->update('tabel_pengguna', ['role' => 'pemilik']);
    }
}