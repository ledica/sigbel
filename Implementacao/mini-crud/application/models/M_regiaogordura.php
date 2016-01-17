<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_regiaoGordura extends CI_Model {
    public function get($id = null) {
        if ($id) {
            $this->db->where('idRegiaoGordura', $id);
        }
        $this->db->order_by("idRegiaoGordura", 'desc');
        return $this->db->get('RegiaoGorduraLocalizada');
    }
}
