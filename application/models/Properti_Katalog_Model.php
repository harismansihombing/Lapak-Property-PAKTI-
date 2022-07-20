<?php

class Properti_Katalog_Model extends CI_Model
{
    function data($number, $offset)
    {
        return $query = $this->db->get('tabel_lapak', $number, $offset)->result();
    }

    function jumlah_data()
    {
        return $this->db->get('tabel_lapak')->num_rows();
    }
}
