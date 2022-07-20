<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PropertiModel extends CI_Model
{

    private $_table = "tabel_properti";

    public $kd_properti;
    public $nik_pemilik;
    public $kd_jenis;
    public $judul_postingan;
    public $harga_sewa_pertahun;
    public $harga_sewa_perbulan;
    public $alamat_lokasi;
    public $luas_tanah;
    public $luas_bangunan;
    public $jumlah_kamar_mandi;
    public $jumlah_kamar_tidur;
    public $sumber_air;
    public $daya_listrik;
    public $Deskripsi;
    public $foto1;
    public $foto2 = "default.jpg";
    public $foto3 = "default.jpg";
    public $foto4 = "default.jpg";
    public $foto5 = "default.jpg";


    public function rules()
    {
        return [
            [
                'field' => 'judul_postingan',
                'label' => 'judul_postingan',
                'rules' => 'required'
            ]

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nik_pemilik" => $id])->result();
    }

    public function getById2($id)
    {
        return $this->db->get_where($this->_table, ["kd_properti" => $id])->row();
    }

    function get_no_invoice()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(kd_properti,4)) AS kd_max FROM tabel_properti WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy') . $kd;
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kd_properti = $post["kd_properti"];
        $this->nik_pemilik = $post["nik_pemilik"];
        $this->kd_jenis = $post["kd_jenis"];
        $this->judul_postingan = $post["judul_postingan"];
        $this->harga_sewa_pertahun = $post["harga_sewa_pertahun"];
        $this->harga_sewa_perbulan = $post["harga_sewa_perbulan"];
        $this->alamat_lokasi = $post["alamat_lokasi"];
        $this->luas_tanah = $post["luas_tanah"];
        $this->luas_bangunan = $post["luas_bangunan"];
        $this->jumlah_kamar_mandi = $post["jumlah_kamar_mandi"];
        $this->jumlah_kamar_tidur = $post["jumlah_kamar_tidur"];
        $this->sumber_air = $post["sumber_air"];
        $this->daya_listrik = $post["daya_listrik"];
        $this->Deskripsi = $post["Deskripsi"];
        $this->foto1 = $this->_uploadImage();
        //$this->foto2 = $this->_uploadImage();
        //$this->foto3 = $this->_uploadImage();
        //$this->foto4 = $this->_uploadImage();
        //$this->foto5 = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_properti = $post["kd_properti"];
        $this->nik_pemilik = $post["nik_pemilik"];
        $this->kd_jenis = $post["kd_jenis"];
        $this->judul_postingan = $post["judul_postingan"];
        $this->harga_sewa_pertahun = $post["harga_sewa_pertahun"];
        $this->harga_sewa_perbulan = $post["harga_sewa_perbulan"];
        $this->alamat_lokasi = $post["alamat_lokasi"];
        $this->luas_tanah = $post["luas_tanah"];
        $this->luas_bangunan = $post["luas_bangunan"];
        $this->jumlah_kamar_mandi = $post["jumlah_kamar_mandi"];
        $this->jumlah_kamar_tidur = $post["jumlah_kamar_tidur"];
        $this->sumber_air = $post["sumber_air"];
        $this->daya_listrik = $post["daya_listrik"];
        $this->Deskripsi = $post["Deskripsi"];

        if (!empty($_FILES["foto1"]["name"])) {
            $this->foto1 = $this->_uploadImage();
        } else {
            $this->foto1 = $post["foto2"];
        }

        return $this->db->update($this->_table, $this, array('kd_properti' => $post['kd_properti']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("kd_properti" => $id));
    }


    function tampil_data()
    {
        return $this->db->get('user');
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/foto_postingan/';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['file_name']            = $this->kd_properti;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto1')) {
            return $this->upload->data("file_name");
            //return $data['nama_berkas'] = $this->upload->data("file_name");
        }

        return "default.jpg";
    }


    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".", $product->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/img/$filename.*"));
        }
    }
}
