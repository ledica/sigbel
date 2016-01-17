<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data['nomeCliente'] = "Maria";
        $this->template->load('template', 'conteudo', $data);

        // $this->load->view('main-header_v');
        //  $this->load->view('welcome_message');
        // $data['titulo'] = "Hello Word";
        // $data['versao'] = $this->db->version();
        //$this->load->view('home_v', $data);
    }

}
