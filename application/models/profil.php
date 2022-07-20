<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Model
{
    private $_table = "tabel_pemilik_properti";
    public $id;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    function tampil_data()
    {
        //return $this->db->get('tabel_pemilik_properti');
        return $this->db->get_where($this->_table, ['id' => $this->id])->row_array();
    }
}
