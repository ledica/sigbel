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
        } else {
            $this->load->library('session');
            $this->session->set_userdata('idCliente', NULL);
        }

        $variaveis['Consulta'] = $this->m_consulta->get(null, $id);
              
        $this->template->load('template', 'v_home_Consulta', $variaveis);
    }

    public function selecionaConsulta($id = null) {
        $this->load->library('session');
        $newdata = array(
            'idConsulta' => $id
        );
        $this->session->set_userdata($newdata);
    }

    public function selecionaAtendimento($id = null) {
        $this->load->library('session');
        $newdata = array(
            'idAtendimento' => $id
        );
        $this->session->set_userdata($newdata);
    }

    public function removeSelecaoCliente() {
        $this->load->library('session');
        $array_items = array('idCliente' => '');
        $this->session->unset_userdata($array_items);
    }

    public function removeSelecaoAtendimento() {
        $this->load->library('session');
        $array_items = array('idAtendimento' => '');
        $this->session->unset_userdata($array_items);
    }

    public function removeSelecaoConsulta() {
        $this->load->library('session');
        $array_items = array('idConsulta' => '');
        $this->session->unset_userdata($array_items);
    }

}
