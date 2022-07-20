<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_Peminjaman extends CI_Model
{

    private $_table = "tabel_peminjaman";

    public $kd_peminjaman;
    public $kd_lapak;
    public $kd_pengguna;
    public $lama_waktu_penyewaan;
    public $tgl_awal_penyewaan;
    public $tgl_penyewaan_berakhir;
    public $tgl_pembayaran_terakhir = "0";
    public $tanggal_create;
    public $status_penyewaan;



    public function rules()
    {
        return [
            [
                'field' => 'kd_peminjaman',
                'label' => 'kd_peminjaman',
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

        //$this->db->select('tabel_peminjaman.kd_pengguna as kd, tabel_lapak.kd_pengguna as kd_pengguna1');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_lapak', 'tabel_lapak.kd_lapak = tabel_peminjaman.kd_lapak');
        $this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        $this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_lapak.kd_pengguna', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getById3($id)
    {
        return $this->db->get_where($this->_table, ["kd_peminjaman" => $id])->result();
    }

    public function getById4($id)
    {
        return $this->db->get_where($this->_table, ["kd_pengguna" => $id])->result();
    }

    public function getById5($id = null)
    {

        //$this->db->select('tabel_peminjaman.kd_pengguna as kd, tabel_lapak.kd_pengguna as kd_pengguna1');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_lapak', 'tabel_lapak.kd_lapak = tabel_peminjaman.kd_lapak');
        //$this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        $this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_peminjaman.kd_peminjaman', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getById6($id = null)
    {
        $status = "Tertunda";
        //$this->db->select('tabel_peminjaman.kd_pengguna as kd, tabel_lapak.kd_pengguna as kd_pengguna1');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_lapak', 'tabel_lapak.kd_lapak = tabel_peminjaman.kd_lapak');
        //$this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        $this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_peminjaman.kd_pengguna', $id);
        $this->db->where('tabel_peminjaman.status_penyewaan', $status);
        $query = $this->db->get();

        return $query->result();
    }

    public function getById7($id = null)
    {
        $statusnya = "Disewa";
        //$this->db->select('tabel_peminjaman.kd_pengguna as kd, tabel_lapak.kd_pengguna as kd_pengguna1');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_lapak', 'tabel_lapak.kd_lapak = tabel_peminjaman.kd_lapak');
        //$this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        $this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_peminjaman.kd_pengguna', $id);
        $this->db->where('tabel_peminjaman.status_penyewaan', $statusnya);
        $query = $this->db->get();

        return $query->result();
    }

    public function getById77($id = null)
    {
        $statusnya = "Tertunda";
        //$this->db->select('tabel_peminjaman.kd_pengguna as kd, tabel_lapak.kd_pengguna as kd_pengguna1');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_lapak', 'tabel_lapak.kd_lapak = tabel_peminjaman.kd_lapak');
        //$this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        $this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_peminjaman.kd_pengguna', $id);
        $this->db->where('tabel_peminjaman.status_penyewaan', $statusnya);
        $query = $this->db->get();

        return $query->result();
    }

    public function getdisewa($id = null)
    {
        $statusnya = "Disewa";
        //$this->db->select('tabel_peminjaman.kd_pengguna as kd, tabel_lapak.kd_pengguna as kd_pengguna1');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_lapak', 'tabel_lapak.kd_lapak = tabel_peminjaman.kd_lapak');
        //$this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        $this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_peminjaman.kd_pengguna', $id);
        $this->db->where('tabel_peminjaman.status_penyewaan', $statusnya);
        $query = $this->db->get();

        return $query->result();
    }

    public function getById8($id = null)
    {

        //$this->db->select('tabel_peminjaman.kd_pengguna as kd, tabel_lapak.kd_pengguna as kd_pengguna1');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_lapak', 'tabel_lapak.kd_lapak = tabel_peminjaman.kd_lapak');
        $this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        $this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_lapak.kd_pengguna', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getById9($id = null)
    {
        $status = "Tertunda";
        //$this->db->select('tabel_peminjaman.kd_pengguna as kd, tabel_lapak.kd_pengguna as kd_pengguna1');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_lapak', 'tabel_lapak.kd_lapak = tabel_peminjaman.kd_lapak');
        $this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        $this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_peminjaman.kd_pengguna', $id);
        $this->db->where('tabel_peminjaman.status_penyewaan', $status);
        $query = $this->db->get();

        return $query->result();
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
        $this->kd_lapak = $post["kd_lapak"];
        $this->kd_pengguna = $post["kd_pengguna"];
        $this->lama_waktu_penyewaan = $post["lama_waktu_penyewaan"];
        $this->tgl_awal_penyewaan = $post["tgl_awal_penyewaan"];
        $this->tgl_penyewaan_berakhir = $post["tgl_penyewaan_berakhir"];
        $this->status_penyewaan = $post["status_penyewaan"];

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


    public function tolak_penawaran()
    {
        $post = $this->input->post();
        $this->kd_peminjaman = $post["kd_peminjaman"];
        $this->kd_lapak = $post["kd_lapak"];
        $this->kd_pengguna = $post["kd_pengguna"];
        $this->lama_waktu_penyewaan = $post["lama_waktu_penyewaan"];
        $this->tgl_awal_penyewaan = $post["tgl_awal_penyewaan"];
        $this->tgl_penyewaan_berakhir = $post["tgl_penyewaan_berakhir"];
        $this->status_penyewaan = 'Tolak';

        return $this->db->update($this->_table, $this, array('kd_peminjaman' => $post['kd_peminjaman']));
    }

    public function terima_penawaran()
    {
        $post = $this->input->post();
        $this->kd_peminjaman = $post["kd_peminjaman"];
        $this->kd_lapak = $post["kd_lapak"];
        $this->kd_pengguna = $post["kd_pengguna"];
        $this->lama_waktu_penyewaan = $post["lama_waktu_penyewaan"];
        $this->tgl_awal_penyewaan = $post["tgl_awal_penyewaan"];
        $this->tgl_penyewaan_berakhir = $post["tgl_penyewaan_berakhir"];
        $this->status_penyewaan = 'Disewa';

        return $this->db->update($this->_table, $this, array('kd_peminjaman' => $post['kd_peminjaman']));
    }

    //Sesi Riwayat Sewa Penyewa ===============================================================================
    public function getById10($id = null)
    {
        $status = "Berakhir";
        //$this->db->select('tabel_peminjaman.kd_pengguna as kd, tabel_lapak.kd_pengguna as kd_pengguna1');
        $this->db->from('tabel_peminjaman');
        $this->db->join('tabel_lapak', 'tabel_lapak.kd_lapak = tabel_peminjaman.kd_lapak');
        $this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        $this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_peminjaman.kd_pengguna', $id);
        $this->db->where('tabel_peminjaman.status_penyewaan', $status);
        $query = $this->db->get();

        return $query->result();
    }
    //=========================================================================================================
}
