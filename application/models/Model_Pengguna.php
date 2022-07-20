<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_Pengguna extends CI_Model
{
    private $_table = "tabel_pengguna";

    public function rules()
    {
        return [
            [
                'field' => 'kd_pengguna',
                'label' => 'Kd_pengguna',
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
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    function tampil_data($id)
    {
        return $this->db->get_where($this->_table, ["kd_pengguna" => $id])->row();
    }

    public function edit_profil()
    {
        $post = $this->input->post();
        $this->kd_pengguna = $post["kd_pengguna"];
        $this->nama_pengguna = $post["nama_pengguna"];
        $this->alamat_pengguna = $post["alamat_pengguna"];
        $this->email = $post["email"];
        $this->no_pengguna = $post["no_pengguna"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('kd_pengguna' => $post['kd_pengguna']));
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './assets/gambar/foto_profil/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 2MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}
