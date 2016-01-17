<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    function cadastrar($data) {
        return $this->db->insert('user', $data);
    }

    function listar() {
        $query = $this->db->get('user');
        return $query->result();
    }

}
