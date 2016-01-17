<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProtocoloAtendimento extends CI_Controller {

    public function index($idConulta = null) {
        $variaveis['idConsulta'] = $idConulta;
        $variaveis['ProtocoloAtendimento'] = $this->m_protocoloatendimento->get(null, $idConulta);
        $this->load->view('v_home_ProtocoloAtendimento', $variaveis);
    }

    public function delete($id = null) {
        if ($this->m_protocoloatendimento->delete($id)) {
            $variaveis['mensagem'] = "Registro excluído com sucesso!";
            $this->template->load('template', 'v_sucesso', $variaveis);
        }
    }

}
