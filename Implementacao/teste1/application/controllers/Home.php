<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->template->load('template', 'conteudo');
       // $data['titulo'] = "Hello Word";
       // $data['versao'] = $this->db->version();
       // $this->load->view('home_v', $data);
    }

}
