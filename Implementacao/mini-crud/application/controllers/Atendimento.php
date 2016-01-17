<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Atendimento extends CI_Controller {

    public function index() {
        $idCliente = $idCliente = $this->session->userdata('idCliente');
        $variaveis['Atendimento'] = $this->m_atendimento->get(null, $idCliente);
        $this->template->load('template', 'v_home_Atendimento', $variaveis);
    }

    public function create($id = null) {
        $variaveis['idConsulta'] = $id;
        $variaveis['idCliente'] = $this->m_consulta->get($variaveis['idConsulta'])->row()->idCliente;
        $variaveis['nomeCliente'] = $this->m_consulta->get($variaveis['nomeCliente'])->row()->nomeCliente;
        $variaveis['Atendimento'] = $this->m_atendimento->get(null, $this->m_consulta->get($variaveis['idConsulta'])->row()->idCliente);

        $variaveis['titulo'] = 'Novo Cadastro Atendimento';
        $this->template->load('template', 'v_cadastro_Atendimento', $variaveis);
    }

    public function createProtocoloAtendimento() {
        $this->load->library('form_validation');
        $regras = array(
            array(
                'field' => 'idConsulta',
                'label' => 'idConsulta',
                'rules' => 'required'
            ),
            array(
                'field' => 'idRegiaoGordura',
                'label' => 'idRegiaoGordura',
                'rules' => 'required'
            ),
            array(
                'field' => 'idProtocolo',
                'label' => 'idProtocolo',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($regras);


        $dados = array(
            "idRegiaoGordura" => $this->input->post('idRegiaoGordura'),
            "idProtocolo" => $this->input->post('idProtocolo'),
            "idConsulta" => $this->input->post('idConsulta')
        );
        if ($this->m_protocoloatendimento->store($dados)) {
            $dados['mensagem'] = "Dados gravados com sucesso!";
            $cadastros = $this->m_atendimento->get(null, null, $this->input->post('idConsulta'));
            $idConsulta = $cadastros->row()->idConsulta;
            $variaveis['ProtocoloAtendimento'] = $this->m_protocoloatendimento->get(null, $idConsulta);

            if ($cadastros->num_rows() > 0) {
                $variaveis['titulo'] = 'Edição de Registro de Atendimento';
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
            }
        } else {
            $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
            $this->load->view('errors/html/v_erro', $variaveis);
        }
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
                'field' => 'idConsulta',
                'label' => 'idConsulta',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($regras);

        if ($this->form_validation->run() == FALSE) {
            $variaveis['titulo'] = 'Novo Registro Atendimento';
            $this->template->load('template', 'v_cadastro_Atendimento', $variaveis);
        } else {

            $id = $this->input->post('id');

            $dados = array(
                "apendiceXifoide" => $this->input->post('apendiceXifoide'),
                "anguloDeTales" => $this->input->post('anguloDeTales'),
                "abdomeInferior" => $this->input->post('abdomeInferior'),
                "peso" => $this->input->post('peso'),
                "axilar" => $this->input->post('axilar'),
                "bracoDireito10cm" => $this->input->post('bracoDireito10cm'),
                "bracoDireito20cm" => $this->input->post('bracoDireito20cm'),
                "bracoEsquerdo10cm" => $this->input->post('bracoEsquerdo10cm'),
                "bracoEsquerdo20cm" => $this->input->post('bracoEsquerdo20cm'),
                "coxaDireita10cm" => $this->input->post('coxaDireita10cm'),
                "coxaDireita20cm" => $this->input->post('coxaDireita20cm'),
                "coxaDireita30cm" => $this->input->post('coxaDireita30cm'),
                "coxaEsquerda10cm" => $this->input->post('coxaEsquerda10cm'),
                "coxaEsquerda20cm" => $this->input->post('coxaEsquerda20cm'),
                "coxaEsquerda30cm" => $this->input->post('coxaEsquerda30cm'),
                "pernaDireita10cm" => $this->input->post('pernaDireita10cm'),
                "pernaDireita20cm" => $this->input->post('pernaDireita20cm'),
                "pernaEsquerda10cm" => $this->input->post('pernaEsquerda10cm'),
                "pernaEsquerda20cm" => $this->input->post('pernaEsquerda20cm'),
                "idCliente" => $this->m_consulta->get($variaveis['idConsulta'])->row()->idCliente,
                "idConsulta" => $this->input->post('idConsulta')
            );
            if ($this->m_atendimento->store($dados, $id)) {
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
            $cadastros = $this->m_atendimento->get($id);
            $idConsulta = $cadastros->row()->idConsulta;
            $variaveis['ProtocoloAtendimento'] = $this->m_protocoloatendimento->get(null, $idConsulta);

            if ($cadastros->num_rows() > 0) {
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
        if ($this->m_atendimento->delete($id)) {
            $variaveis['mensagem'] = "Registro excluído com sucesso!";
            $this->template->load('template', 'v_sucesso', $variaveis);
        }
    }

}
