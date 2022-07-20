<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Data_Properti extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get()
    {
        $id = $this->get('kd_lapak');
        if ($id == '') {
            $kontak = $this->db->get('tabel_lapak')->result();
        } else {
            $this->db->where('kd_lapak', $id);
            $kontak = $this->db->get('tabel_lapak')->result();
        }
        $this->response($kontak, 200);
    }

    function index_post()
    {
        $data = array(
            'kd_lapak'                => $this->post('kd_lapak'),
            'kd_jenis'                => $this->post('kd_jenis'),
            'kd_pengguna'             => $this->post('kd_pengguna'),
            'Judul_postingan'         => $this->post('Judul_postingan'),
            'harga_sewa_pertahun'     => $this->post('harga_sewa_pertahun'),
            'harga_sewa_perbulan'     => $this->post('harga_sewa_perbulan'),
            'alamat_lokasi'           => $this->post('alamat_lokasi'),
            'luas_tanah'              => $this->post('luas_tanah'),
            'luas_bangunan'           => $this->post('luas_bangunan'),
            'jumlah_kamar_mandi'      => $this->post('jumlah_kamar_mandi'),
            'jumlah_kamar_tidur'      => $this->post('jumlah_kamar_tidur'),
            'sumber_air'              => $this->post('sumber_air'),
            'daya_listrik'            => $this->post('daya_listrik'),
            'foto1'                   => $this->post('foto1'),
            'foto2'                   => $this->post('foto2'),
            'foto3'                   => $this->post('foto3'),
            'foto4'                   => $this->post('foto4'),
            'foto5'                   => $this->post('foto5'),
            'Deskripsi'               => $this->post('Deskripsi'),
            'surat_PBB'               => $this->post('surat_PBB'),
            'surat_kepemilikan'       => $this->post('surat_kepemilikan'),
            'status_postingan'        => $this->post('status_postingan'),
        );
        $insert = $this->db->insert('tabel_lapak', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('kd_lapak');
        $data = array(
            'kd_lapak'                => $this->post('kd_lapak'),
            'kd_jenis'                => $this->post('kd_jenis'),
            'kd_pengguna'             => $this->post('kd_pengguna'),
            'Judul_postingan'         => $this->post('Judul_postingan'),
            'harga_sewa_pertahun'     => $this->post('harga_sewa_pertahun'),
            'harga_sewa_perbulan'     => $this->post('harga_sewa_perbulan'),
            'alamat_lokasi'           => $this->post('alamat_lokasi'),
            'luas_tanah'              => $this->post('luas_tanah'),
            'luas_bangunan'           => $this->post('luas_bangunan'),
            'jumlah_kamar_mandi'      => $this->post('jumlah_kamar_mandi'),
            'jumlah_kamar_tidur'      => $this->post('jumlah_kamar_tidur'),
            'sumber_air'              => $this->post('sumber_air'),
            'daya_listrik'            => $this->post('daya_listrik'),
            'foto1'                   => $this->post('foto1'),
            'foto2'                   => $this->post('foto2'),
            'foto3'                   => $this->post('foto3'),
            'foto4'                   => $this->post('foto4'),
            'foto5'                   => $this->post('foto5'),
            'Deskripsi'               => $this->post('Deskripsi'),
            'surat_PBB'               => $this->post('surat_PBB'),
            'surat_kepemilikan'       => $this->post('surat_kepemilikan'),
            'status_postingan'        => $this->post('status_postingan'),
        );
        $this->db->where('kd_lapak', $id);
        $update = $this->db->update('tabel_lapak', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('kd_lapak');
        $this->db->where('kd_lapak', $id);
        $delete = $this->db->delete('tabel_lapak');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
