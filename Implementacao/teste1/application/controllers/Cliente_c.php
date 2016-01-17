<?php

class Cliente_c extends CI_Controller {

    public function insert() {
        $this->load->model('Cliente_m');

        $data['nomeCliente'] = $this->input->post('nomeCliente');
        $data['numeroCPF'] = $this->input->post('numeroCPF');
        $data['numeroRG'] = $this->input->post('numeroRG');
        $data['endereco'] = $this->input->post('endereco');
        $data['bairro'] = $this->input->post('bairro');
        $data['cidade'] = $this->input->post('cidade');
        $data['numeroEndereco'] = $this->input->post('numeroEndereco');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['dataNascimento'] = $this->input->post('dataNascimento');
        $data['dataCadastro'] = $this->input->post('dataCadastro');
        $data['sexo'] = $this->input->post('sexo');
        $data['estadoCivil'] = $this->input->post('estadoCivil');
        $data['profissao'] = $this->input->post('profissao');
        $data['ocupacao'] = $this->input->post('ocupacao');
        $data['fotografia'] = $this->input->post('fotografia');

        $this->Cliente_m->insert($data);
        $this->load->view('operationSuccess_v');
    }

    public function lista() {
        $this->load->model('Cliente_m');
        $data['clientes'] = $this->Cliente_m->lista()->result_array();
        $this->load->view('ListaCliente_v', $data);
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
    
    public function index() {
        $data['nomeCliente'] = "Maria";
        $this->load->view('ContatoCliente_v', $data);
    }

}
