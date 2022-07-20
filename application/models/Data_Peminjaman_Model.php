<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data_Peminjaman_Model extends CI_Model
{

    private $_table = "tabel_peminjaman";

    public $kd_peminjaman;
    public $nik_pemilik;
    public $nik_penyewa;
    public $kd_properti;
    public $lama_waktu_penyewaan;
    public $tgl_awal_penyewaan;
    public $tgl_penyewaan_berakhir;
    //public $tgl_pembayaran_terakhir;



    public function rules()
    {
        return [
            [
                'field' => 'nik_pemilik',
                'label' => 'nik_pemilik',
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

    public function getById2($id = null)
    {

        $this->db->select('*');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_penyewa', 'tabel_peminjaman.nik_penyewa=tabel_penyewa.nik_penyewa');
        $this->db->where('nik_pemilik', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getById3($id)
    {
        return $this->db->get_where($this->_table, ["kd_peminjaman" => $id])->result();
    }

    function get_no_invoice()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(kd_peminjaman,4)) AS kd_max FROM tabel_peminjaman WHERE DATE(tanggal_create)=CURDATE()");
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
        $this->kd_peminjaman = $post["kd_peminjaman"];
        $this->nik_pemilik = $post["nik_pemilik"];
        $this->nik_penyewa = $post["nik_penyewa"];
        $this->kd_properti = $post["kd_properti"];
        $this->lama_waktu_penyewaan = $post["lama_waktu_penyewaan"];
        $this->tgl_awal_penyewaan = $post["tgl_awal_penyewaan"];
        $this->tgl_penyewaan_berakhir = $post["tgl_penyewaan_berakhir"];
        //$this->tgl_pembayaran_terakhir = $post["tgl_pembayaran_terakhir"];

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
