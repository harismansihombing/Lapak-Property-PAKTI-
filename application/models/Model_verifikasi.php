<?php 

class Model_verifikasi extends CI_model
{
	private $_table = "tabel_lapak";

    public $kd_lapak;
    public $kd_jenis;
    public $kd_pengguna;
    public $Judul_postingan;
    public $harga_sewa_pertahun;
    public $harga_sewa_perbulan = '0';
    public $alamat_lokasi;
    public $luas_tanah;
    public $luas_bangunan;
    public $jumlah_kamar_mandi;
    public $jumlah_kamar_tidur;
    public $sumber_air;
    public $daya_listrik;
    public $foto1 = "default.jpg";
    public $foto2 = "default.jpg";
    public $foto3 = "default.jpg";
    public $foto4 = "default.jpg";
    public $foto5 = "default.jpg";
    public $Deskripsi;
    public $tanggal;
    public $jumlah_lantai = '0';
    public $surat_PBB = "default.jpg";
    public $surat_kepemilikan = "default.jpg";


	public function getVerifikasi()
    {
    	$verifikasi = 'verifikasi';
        return $this->db->get_where($this->_table, ["status_postingan" => '1'])->result();
    }

    public function hapusDataVerifikasi($id)
    {
    	//$this->db->where('kd_pengguna', $id);
    	//$this->db->delete('tabel_pengguna');

    	return $this->db->delete($this->_table, array("kd_lapak" => $id));
    }

    public function getVerifikasiById($id)
    {
    	//$verifikasi = 'verifikasi';
    	//return $this->db->get_where($this->_table, ['kd_pengguna' => $id])->result();
    	return $this->db->get_where('tabel_lapak', ['kd_lapak' => $id])->result();
    }

}