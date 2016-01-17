<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {

    /**
     * Método principal do mini-crud
     * @param nenhum
     * @return view
     */
    public function index($idCliente = null) {
       
        $this->session->set_userdata('idCliente', $idCliente);
        $variaveis['idCliente'] = $idCliente;
        $variaveis['Consulta'] = $this->m_consulta->get(null, $idCliente);

        $cadastros = $this->m_cliente->get($idCliente);
        $variaveis['nomeCliente'] = $cadastros->row()->nomeCliente;
        $variaveis['numeroCPF'] = $cadastros->row()->numeroCPF;
        $variaveis['dataNascimento'] = $cadastros->row()->dataNascimento;

        $this->template->load('template', 'v_home_Consulta', $variaveis);
    }

    public function atendimento($idConsulta = null) {
        if ($idConsulta) {
            $cadastros = $this->m_atendimento->get(null, null, $idConsulta);
            if ($cadastros->num_rows() > 0) {
                $variaveis['ProtocoloAtendimento'] = $this->m_protocoloatendimento->get(null, $idConsulta);
                $variaveis['titulo'] = 'Edição de Registro Atendimento';
                $variaveis['id'] = $cadastros->row()->idAtendimento;
                $variaveis['nomeCliente'] = $cadastros->row()->nomeCliente;
                $variaveis['apendiceXifoide'] = $cadastros->row()->apendiceXifoide;
                $variaveis['anguloDeTales'] = $cadastros->row()->anguloDeTales;
                $variaveis['abdomeInferior'] = $cadastros->row()->abdomeInferior;
                $variaveis['peso'] = $cadastros->row()->peso;
                $variaveis['axilar'] = $cadastros->row()->axilar;
                $variaveis['bracoDireito10cm'] = $cadastros->row()->bracoDireito10cm;
                $variaveis['bracoDireito20cm'] = $cadastros->row()->bracoDireito20cm;
                $variaveis['bracoEsquerdo10cm'] = $cadastros->row()->bracoEsquerdo10cm;
                $variaveis['bracoEsquerdo20cm'] = $cadastros->row()->bracoEsquerdo20cm;
                $variaveis['coxaDireita10cm'] = $cadastros->row()->coxaDireita10cm;
                $variaveis['coxaDireita20cm'] = $cadastros->row()->coxaDireita20cm;
                $variaveis['coxaDireita30cm'] = $cadastros->row()->coxaDireita30cm;
                $variaveis['coxaEsquerda10cm'] = $cadastros->row()->coxaEsquerda10cm;
                $variaveis['coxaEsquerda20cm'] = $cadastros->row()->coxaEsquerda20cm;
                $variaveis['coxaEsquerda30cm'] = $cadastros->row()->coxaEsquerda30cm;
                $variaveis['pernaDireita10cm'] = $cadastros->row()->pernaDireita10cm;
                $variaveis['pernaDireita20cm'] = $cadastros->row()->pernaDireita20cm;
                $variaveis['pernaEsquerda10cm'] = $cadastros->row()->pernaEsquerda10cm;
                $variaveis['pernaEsquerda20cm'] = $cadastros->row()->pernaEsquerda20cm;
                $variaveis['idConsulta'] = $cadastros->row()->idConsulta;
                $this->template->load('template', 'v_cadastro_Atendimento', $variaveis);
            } else {
                $variaveis['idConsulta'] = $idConsulta;
                $variaveis['idCliente'] = $this->m_consulta->get($idConsulta)->row()->idCliente;
                $variaveis['titulo'] = 'Novo Cadastro Atendimento';
                $this->template->load('template', 'v_cadastro_Atendimento', $variaveis);
            }
        }
    }

    /**
     * Carrega o formulário para novo cadastro
     * @param nenhum
     * @return view
     */
    public function create($id = null) {
        $variaveis['idCliente'] = $id;
        $this->load->library('session');
        $this->session->set_userdata('idCliente', $id);
        $variaveis['idCliente'] = $id;
        $variaveis['Consulta'] = $this->m_consulta->get(null, $id);

        $cadastros = $this->m_cliente->get($id);
        $variaveis['nomeCliente'] = $cadastros->row()->nomeCliente;
        $variaveis['numeroCPF'] = $cadastros->row()->numeroCPF;
        $variaveis['dataNascimento'] = $cadastros->row()->dataNascimento;
        $variaveis['titulo'] = 'Novo Cadastro Consulta';
        $this->template->load('template', 'v_cadastro_Consulta', $variaveis);
    }

    /**
     * Salva o registro no banco de dados.
     * Caso venha o valor id, indica uma edição, caso contrário, um insert.
     * @param campos do formulário
     * @return view
     */
    public function store() {

        $this->load->library('form_validation');

        $regras = array(
            array(
                'field' => 'idCliente',
                'label' => 'idCliente',
                'rules' => 'required'
            ),
            array(
                'field' => 'data',
                'label' => 'data',
                'rules' => 'required'
            ),
            array(
                'field' => 'horario',
                'label' => 'horario',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($regras);

        if ($this->form_validation->run() == FALSE) {
            $variaveis['titulo'] = 'Novo Registro Consulta';
            $this->template->load('template', 'v_cadastro_Consulta', $variaveis);
        } else {

            $id = $this->input->post('id');
            $dataString = $this->input->post('data');
            $date = DateTime::createFromFormat('d/m/Y', $dataString);

            $dados = array(
                "idCliente" => $this->input->post('idCliente'),
                "data" => $date->format("Y-m-d"),
                "horario" => $this->input->post('horario')
            );
            if ($this->m_consulta->store($dados, $id)) {
                $variaveis['mensagem'] = "Dados gravados com sucesso!";
                $this->template->load('template', 'v_sucesso', $variaveis);
            } else {
                $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
                $this->load->view('errors/html/v_erro', $variaveis);
            }
        }
    }

    /**
     * Chama o formulário com os campos preenchidos pelo registro selecioando.
     * @param $id do registro
     * @return view
     */
    public function edit($id = null) {

        if ($id) {

            $cadastros = $this->m_consulta->get($id);

            if ($cadastros->num_rows() > 0) {

                $date = DateTime::createFromFormat('Y-m-d', $cadastros->row()->data);
                $variaveis['titulo'] = 'Edição de Registro';
                $variaveis['id'] = $cadastros->row()->idConsulta;
                $variaveis['idCliente'] = $cadastros->row()->idCliente;
                $variaveis['nomeCliente'] = $cadastros->row()->nomeCliente;
                $variaveis['data'] = $date->format("d/m/Y");
                $variaveis['horario'] = $cadastros->row()->horario;

                $this->template->load('template', 'v_cadastro_Consulta', $variaveis);
            } else {
                $variaveis['mensagem'] = "Registro não encontrado.";
                $this->load->view('errors/html/v_erro', $variaveis);
            }
        }
    }

    /**
     * Função que exclui o registro através do id.
     * @param $id do registro a ser excluído.
     * @return boolean;
     */
    public function delete($id = null) {
        if ($this->m_consulta->delete($id)) {
            $variaveis['mensagem'] = "Registro excluído com sucesso!";
            $this->load->view('v_sucesso', $variaveis);
        }
    }

}
