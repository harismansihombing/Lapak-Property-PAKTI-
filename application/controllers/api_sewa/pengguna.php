<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Pengguna extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get()
    {
        $id = $this->get('kd_pengguna');
        if ($id == '') {
            $kontak = $this->db->get('tabel_pengguna')->result();
        } else {
            $this->db->where('kd_pengguna', $id);
            $kontak = $this->db->get('tabel_pengguna')->result();
        }
        $this->response($kontak, 200);
    }

    function index_post()
    {
        $data = array(
            'kd_pengguna'           => $this->post('kd_pengguna'),
            'NIK_pengguna'          => $this->post('NIK_pengguna'),
            'nama_pengguna'         => $this->post('nama_pengguna'),
            'alamat_pengguna'       => $this->post('alamat_pengguna'),
            'no_pengguna'           => $this->post('no_pengguna'),
            'email'                 => $this->post('email'),
            'foto_ktp'              => $this->post('foto_ktp'),
            'foto_diri_dan_ktp'     => $this->post('foto_diri_dan_ktp'),
            'foto_profil'           => $this->post('foto_profil'),
            'username'              => $this->post('username'),
            'password'              => $this->post('password'),
            'role'                  => $this->post('role'),

        );
        $insert = $this->db->insert('tabel_pengguna', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('kd_pengguna');
        $data = array(
            'kd_pengguna'           => $this->put('kd_pengguna'),
            'NIK_pengguna'          => $this->put('NIK_pengguna'),
            'nama_pengguna'         => $this->put('nama_pengguna'),
            'alamat_pengguna'       => $this->put('alamat_pengguna'),
            'no_pengguna'           => $this->put('no_pengguna'),
            'email'                 => $this->put('email'),
            'foto_ktp'              => $this->put('foto_ktp'),
            'foto_diri_dan_ktp'     => $this->put('foto_diri_dan_ktp'),
            'foto_profil'           => $this->put('foto_profil'),
            'username'              => $this->put('username'),
            'password'              => $this->put('password'),
            'role'                  => $this->put('role'),
        );
        $this->db->where('kd_pengguna', $id);
        $update = $this->db->update('tabel_pengguna', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('kd_pengguna');
        $this->db->where('kd_pengguna', $id);
        $delete = $this->db->delete('tabel_pengguna');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
