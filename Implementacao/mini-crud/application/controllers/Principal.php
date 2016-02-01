<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

    public function selecionaCliente($id = null) {
        if ($id == null) {
            $id = $this->input->post('idCliente');
        }
        if ($id > 0) {
            $this->load->library('session');
            $this->session->set_userdata('idCliente', $id);
            $variaveis['idCliente'] = $this->session->userdata('idCliente');
            $cadastros = $this->m_cliente->get($id);
            $this->session->set_userdata('nomeCliente', $cadastros->row()->nomeCliente);
            $this->session->set_userdata('numeroCPF', $cadastros->row()->numeroCPF);
            $this->session->set_userdata('fotografia', $cadastros->row()->fotografia);
            if ($cadastros->row()->dataNascimento) {
                date_default_timezone_set('America/Sao_Paulo');
                $hoje = getdate();
                $data = DateTime::createFromFormat('Y-m-d', $cadastros->row()->dataNascimento);
                $nasc = strtotime($data->format("Ymd"));
                $nasc1 = getdate($nasc);
                if ($hoje[mon] > $nasc1[mon]) {
                    $dataNascimento = $hoje[year] - $nasc1[year];
                    $this->session->set_userdata('dataNascimento', $dataNascimento);
                } else {
                    $dataNascimento = $hoje[year] - $nasc1[year] - 1;
                    $this->session->set_userdata('dataNascimento', $dataNascimento);
                }
            }
        } else {
            $this->load->library('session');
            $this->session->set_userdata('idCliente', NULL);
        }

        $variaveis['Consulta'] = $this->m_consulta->get(null, $id);


        $this->template->load('template', 'v_home_Consulta');
    }

}
