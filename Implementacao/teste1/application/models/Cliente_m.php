<?php

class Cliente_m extends CI_Model {
    
    public function index() {
        $this->load->view('ContatoCliente_v');
    }
    
    public function lista() {
        return  $this->db->get('Cliente');
    }

    public function insert($data) {
        $this->db->insert('Cliente', $data);
    }

}
