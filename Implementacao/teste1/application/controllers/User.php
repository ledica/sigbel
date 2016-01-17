<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function index() {
        $data['titulo'] = "CRUD com CodeIgniter | Pessoas";

        $this->load->model('User_m');
        $data['users'] = $this->User_m->listar();

        $this->load->view('user_v', $data);
    }

    function cadastrar() {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span>', '</span>');
        $validations = array(
            array(
                'field' => 'nome',
                'label' => 'Nome',
                'rules' => 'required|min_length[4]|max_length[45]'
            ),
            array(
                'field' => 'email',
                'label' => 'E-mail',
                'rules' => 'trim|required|valid_email|max_length[45]'
            )
        );

        $this->form_validation->set_rules($validations);
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data['nome'] = $this->input->post('nome');
            $data['email'] = $this->input->post('email');

            $this->load->model('User_m');
            if ($this->User_m->cadastrar($data)) {
                redirect('User');
            } else {
                log_message('error', 'Erro no cadastro...');
            }
        }
    }

}
