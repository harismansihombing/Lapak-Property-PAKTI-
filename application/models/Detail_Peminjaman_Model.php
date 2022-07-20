<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Detail_Peminjaman_Model extends CI_Model
{

    private $_table = "tabel_detail_peminjaman";

    public $kd_detail_peminjaman;
    public $kd_peminjaman;
    public $peminjaman_ke;
    public $nominal_pembayaran;
    public $tgl_pembayaran;
    public $durasi_pembayaran;
    public $keterangan_status;


    public function rules()
    {
        return [
            [
                'field' => 'peminjaman_ke',
                'label' => 'peminjaman_ke',
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
        return $this->db->get_where($this->_table, ["kd_peminjaman" => $id])->result();
    }

    public function getById3($id)
    {
        return $this->db->get_where($this->_table, ["kd_detail_peminjaman" => $id])->row();
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
        $this->kd_detail_peminjaman = $post["kd_detail_peminjaman"];
        $this->kd_peminjaman = $post["kd_peminjaman"];
        $this->peminjaman_ke = $post["peminjaman_ke"];
        $this->nominal_pembayaran = $post["nominal_pembayaran"];
        $this->tgl_pembayaran = $post["tgl_pembayaran"];
        $this->durasi_pembayaran = $post["durasi_pembayaran"];
        $this->keterangan_status = $post["keterangan_status"];

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_detail_peminjaman = $post["kd_detail_peminjaman"];
        $this->kd_peminjaman = $post["kd_peminjaman"];
        $this->peminjaman_ke = $post["peminjaman_ke"];
        $this->nominal_pembayaran = $post["nominal_pembayaran"];
        $this->tgl_pembayaran = $post["tgl_pembayaran"];
        $this->durasi_pembayaran = $post["durasi_pembayaran"];
        $this->keterangan_status = $post["keterangan_status"];

        return $this->db->update($this->_table, $this, array('kd_detail_peminjaman' => $post['kd_detail_peminjaman']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kd_detail_peminjaman" => $id));
    }
}
