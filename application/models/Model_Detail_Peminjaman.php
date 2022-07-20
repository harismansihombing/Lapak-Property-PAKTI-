<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_Detail_Peminjaman extends CI_Model
{
    private $_table = "tabel_detail_peminjaman";

    public $kd_detail_peminjaman;
    public $peminjaman_ke;
    public $nominal_pembayaran;
    public $tgl_pembayaran;
    public $durasi_pembayaran;
    public $keterangan_status;
    public $bukti_pembayaran = "default.jpg";


    public function rules()
    {
        return [
            [
                'field' => 'kd_peminjaman',
                'label' => 'Kd_peminjaman',
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
        $this->db->from('tabel_detail_peminjaman');
        $this->db->join('tabel_peminjaman', 'tabel_peminjaman.kd_peminjaman = tabel_detail_peminjaman.kd_peminjaman');
        //$this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        //$this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_detail_peminjaman.kd_peminjaman', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getById3($id = null)
    {

        //$this->db->select('tabel_peminjaman.kd_pengguna as kd, tabel_lapak.kd_pengguna as kd_pengguna1');
        $this->db->from('tabel_detail_peminjaman');
        $this->db->join('tabel_peminjaman', 'tabel_peminjaman.kd_peminjaman = tabel_detail_peminjaman.kd_peminjaman');
        //$this->db->join('tabel_pengguna', 'tabel_pengguna.kd_pengguna = tabel_peminjaman.kd_pengguna');
        //$this->db->join('tabel_jenis', 'tabel_jenis.kd_jenis = tabel_lapak.kd_jenis');
        $this->db->where('tabel_detail_peminjaman.kd_peminjaman', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function get_no_invoice()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(kd_detail_peminjaman,4)) AS kd_max FROM tabel_detail_peminjaman WHERE DATE(tanggal_buat)=CURDATE()");
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

    public function save_detail_sewa()
    {
        $post = $this->input->post();
        $this->kd_detail_peminjaman = $post["kd_detail_peminjaman"];
        $this->kd_peminjaman = $post["kd_peminjaman"];
        $this->nominal_pembayaran = $post["nominal_pembayaran"];
        $this->tgl_pembayaran = $post["tgl_pembayaran"];
        $this->keterangan_status = "Belum Terverifikasi";
        $this->bukti_pembayaran = $this->_uploadImage();

        return $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/Gambar/bukti_pembayaran';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 2MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}
