<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_Lapak extends CI_Model
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
    public $surat_PBB = "0";
    public $surat_kepemilikan = "0";


    public function rules()
    {
        return [
            [
                'field' => 'Judul_postingan',
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
        return $this->db->get_where($this->_table, ["kd_lapak" => $id])->result();
    }

    public function getkatalog($id)
    {
        $this->db->from('tabel_lapak');
        $this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_lapak.kd_pengguna');
        $this->db->where('tabel_lapak.kd_lapak', $id);
        $query = $this->db->get();
        return $query->result();
        //return $this->db->get_where($this->_table, ["kd_lapak" => $id])->result();
    }

    public function getById2($id)
    {
        return $this->db->get_where($this->_table, ["kd_pengguna" => $id])->result();
    }

    public function getById3($id = null)
    {

        //$this->db->select('tabel_lapak.*, tabel_peminjaman.kd_pengguna as kd');
        $this->db->from('tabel_lapak');
        $this->db->join('tabel_peminjaman', 'tabel_peminjaman.kd_lapak = tabel_lapak.kd_lapak');
        //$this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna2=tabel_peminjaman.kd_pengguna');
        $this->db->where('tabel_lapak.kd_lapak', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getById4($id)
    {
        //return $this->db->get_where($this->_table, ["kd_lapak" => $id])->result();
        //$this->db->select('tabel_lapak.*, tabel_peminjaman.kd_pengguna as kd');
        $this->db->from('tabel_lapak');
        //$this->db->join('tabel_lapak', 'tabel_lapak.kd_lapak = tabel_peminjaman.kd_lapak');
        $this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_lapak.kd_pengguna');
        $this->db->where('tabel_lapak.kd_lapak', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function get_no_invoice()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(kd_lapak,4)) AS kd_max FROM tabel_lapak WHERE DATE(tanggal)=CURDATE()");
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
        $this->kd_lapak = $post["kd_lapak"];
        $this->kd_jenis = $post["kd_jenis"];
        $this->kd_pengguna = $post["kd_pengguna"];
        $this->Judul_postingan = $post["Judul_postingan"];
        $this->harga_sewa_pertahun = $post["harga_sewa_pertahun"];
        $this->alamat_lokasi = $post["alamat_lokasi"];
        $this->luas_tanah = $post["luas_tanah"];
        $this->luas_bangunan = $post["luas_bangunan"];
        $this->jumlah_kamar_mandi = $post["jumlah_kamar_mandi"];
        $this->jumlah_kamar_tidur = $post["jumlah_kamar_tidur"];
        $this->sumber_air = $post["sumber_air"];
        $this->daya_listrik = $post["daya_listrik"];
        $this->foto1 = $this->_uploadImage();
        $this->foto2 = $this->_uploadImage();
        //$this->foto3 = $this->_uploadImage();
        //$this->foto4 = $this->_uploadImage();
        //$this->foto5 = $this->_uploadImage();
        $this->Deskripsi = $post["Deskripsi"];
        //$this->jumlah_lantai = $post["jumlah_lantai"];
        // $this->surat_PBB = $post["surat_PBB"];
        // $this->surat_kepemilikan = $post["surat_kepemilikan"];


        return $this->db->insert($this->_table, $this);
    }

    // Sessi Tambah Postingan ==============================================================
    public function save_tanah()
    {
        $post = $this->input->post();
        $this->kd_lapak = $post["kd_lapak"];
        $this->kd_jenis = $post["kd_jenis"];
        $this->kd_pengguna = $post["kd_pengguna"];
        $this->Judul_postingan = $post["Judul_postingan"];
        $this->harga_sewa_pertahun = $post["harga_sewa_pertahun"];
        $this->alamat_lokasi = $post["alamat_lokasi"];
        $this->luas_tanah = $post["luas_tanah"];
        $this->foto1 = $this->do_upload1();
        $this->foto2 = $this->do_upload2();
        $this->foto3 = $this->do_upload3();
        $this->foto4 = $this->do_upload4();
        $this->foto5 = $this->do_upload5();
        $this->Deskripsi = $post["Deskripsi"];
        //$this->jumlah_lantai = $post["jumlah_lantai"];
        $this->surat_PBB = $this->do_upload_pbb();
        $this->surat_kepemilikan = $this->do_upload_kepemilikan();

        return $this->db->insert($this->_table, $this);
    }

    function do_upload1()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto1';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto1');
        $result1 = $this->upload->data('file_name');
        return $result1;
    }

    function do_upload2()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto2';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto2');
        $result2 = $this->upload->data('file_name');
        return $result2;
    }

    function do_upload3()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto3';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto3');
        $result3 = $this->upload->data('file_name');
        return $result3;
    }

    function do_upload4()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto4';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto4');
        $result4 = $this->upload->data('file_name');
        return $result4;
    }

    function do_upload5()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto5';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto5');
        $result5 = $this->upload->data('file_name');
        return $result5;
    }

    function do_upload_pbb()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/surat_pbb';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('surat_pbb');
        $result6 = $this->upload->data('file_name');
        return $result6;
    }

    function do_upload_kepemilikan()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/surat_kepemilikan';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('surat_kepemilikan');
        $result7 = $this->upload->data('file_name');
        return $result7;
    }

    public function save_rumah()
    {
        $post = $this->input->post();
        $this->kd_lapak = $post["kd_lapak"];
        $this->kd_jenis = $post["kd_jenis"];
        $this->kd_pengguna = $post["kd_pengguna"];
        $this->Judul_postingan = $post["Judul_postingan"];
        $this->harga_sewa_pertahun = $post["harga_sewa_pertahun"];
        $this->jumlah_kamar_mandi = $post["jumlah_kamar_mandi"];
        $this->jumlah_kamar_tidur = $post["jumlah_kamar_tidur"];
        $this->luas_bangunan = $post["luas_bangunan"];
        $this->luas_tanah = $post["luas_tanah"];
        $this->sumber_air = $post["sumber_air"];
        $this->daya_listrik = $post["daya_listrik"];
        $this->alamat_lokasi = $post["alamat_lokasi"];
        $this->foto1 = $this->do_upload_rumah1();
        $this->foto2 = $this->do_upload_rumah2();
        $this->foto3 = $this->do_upload_rumah3();
        $this->foto4 = $this->do_upload_rumah4();
        $this->foto5 = $this->do_upload_rumah5();
        $this->Deskripsi = $post["Deskripsi"];
        $this->jumlah_lantai = $post["jumlah_lantai"];
        $this->surat_PBB = $this->do_upload_pbb_rumah();
        $this->surat_kepemilikan = $this->do_upload_kepemilikan_rumah();

        return $this->db->insert($this->_table, $this);
    }

    function do_upload_rumah1()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto1';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto1');
        $result1 = $this->upload->data('file_name');
        return $result1;
    }

    function do_upload_rumah2()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto2';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto2');
        $result2 = $this->upload->data('file_name');
        return $result2;
    }

    function do_upload_rumah3()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto3';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto3');
        $result3 = $this->upload->data('file_name');
        return $result3;
    }

    function do_upload_rumah4()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto4';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto4');
        $result4 = $this->upload->data('file_name');
        return $result4;
    }

    function do_upload_rumah5()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto5';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto5');
        $result5 = $this->upload->data('file_name');
        return $result5;
    }

    function do_upload_pbb_rumah()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/surat_pbb';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('surat_pbb');
        $result6 = $this->upload->data('file_name');
        return $result6;
    }

    function do_upload_kepemilikan_rumah()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/surat_kepemilikan';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('surat_kepemilikan');
        $result7 = $this->upload->data('file_name');
        return $result7;
    }

    public function save_ruko()
    {
        $post = $this->input->post();
        $this->kd_lapak = $post["kd_lapak"];
        $this->kd_jenis = $post["kd_jenis"];
        $this->kd_pengguna = $post["kd_pengguna"];
        $this->Judul_postingan = $post["Judul_postingan"];
        $this->harga_sewa_pertahun = $post["harga_sewa_pertahun"];
        $this->jumlah_kamar_mandi = $post["jumlah_kamar_mandi"];
        $this->jumlah_kamar_tidur = $post["jumlah_kamar_tidur"];
        $this->luas_bangunan = $post["luas_bangunan"];
        $this->luas_tanah = $post["luas_tanah"];
        $this->sumber_air = $post["sumber_air"];
        $this->daya_listrik = $post["daya_listrik"];
        $this->alamat_lokasi = $post["alamat_lokasi"];
        $this->foto1 = $this->do_upload_ruko1();
        $this->foto2 = $this->do_upload_ruko2();
        $this->foto3 = $this->do_upload_ruko3();
        $this->foto4 = $this->do_upload_ruko4();
        $this->foto5 = $this->do_upload_ruko5();
        $this->Deskripsi = $post["Deskripsi"];
        $this->surat_PBB = $this->do_upload_pbb_ruko();
        $this->surat_kepemilikan = $this->do_upload_kepemilikan_ruko();

        return $this->db->insert($this->_table, $this);
    }

    function do_upload_ruko1()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto1';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto1');
        $result1 = $this->upload->data('file_name');
        return $result1;
    }

    function do_upload_ruko2()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto2';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto2');
        $result2 = $this->upload->data('file_name');
        return $result2;
    }

    function do_upload_ruko3()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto3';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto3');
        $result3 = $this->upload->data('file_name');
        return $result3;
    }

    function do_upload_ruko4()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto4';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto4');
        $result4 = $this->upload->data('file_name');
        return $result4;
    }

    function do_upload_ruko5()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto5';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto5');
        $result5 = $this->upload->data('file_name');
        return $result5;
    }

    function do_upload_pbb_ruko()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/surat_pbb';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('surat_pbb');
        $result6 = $this->upload->data('file_name');
        return $result6;
    }

    function do_upload_kepemilikan_ruko()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/surat_kepemilikan';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('surat_kepemilikan');
        $result7 = $this->upload->data('file_name');
        return $result7;
    }

    // ========================================================================================


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


    // Sesi Pencarian Data Pada Frontend ==============================================

    public function get_cari($keyword)
    {
        $this->db->from('tabel_lapak');
        $this->db->like('Judul_postingan', $keyword);

        return $this->db->get()->result();
    }

    public function get_cari_kategori($keyword)
    {
        $this->db->from('tabel_lapak');
        $this->db->like('kd_jenis', $keyword);

        return $this->db->get()->result();
    }
    //=================================================================================

    // Sesi Daftar Postingan ==========================================================
    public function edit_postingan()
    {
        $post = $this->input->post();

        $this->kd_lapak = $post["kd_lapak"];
        $this->kd_jenis = $post["kd_jenis"];
        $this->kd_pengguna = $post["kd_pengguna"];
        $this->Judul_postingan = $post["Judul_postingan"];
        $this->alamat_lokasi = $post["alamat_lokasi"];
        $this->luas_tanah = $post["luas_tanah"];
        $this->Deskripsi = $post["Deskripsi"];

        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // } else {
        //     $this->image = $post["old_image"];
        // }

        return $this->db->update($this->_table, $this, array('kd_lapak' => $post['kd_lapak']));
    }

    public function get_kode_pengguna_edit($id)
    {
        return $this->db->get_where($this->_table, ["kd_pengguna" => $id])->result();
    }

    public function delete_postingan($id)
    {
        //$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("kd_lapak" => $id));
    }


    //=================================================================================

}
