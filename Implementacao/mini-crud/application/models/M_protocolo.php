<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_protocolo extends CI_Model {

    /**
     * Grava os dados na tabela.
     * @param $dados. Array que contém os campos a serem inseridos
     * @param Se for passado o $id via parâmetro, então atualizo o registro em vez de inseri-lo.
     * @return boolean
     */
    public function store($dados = null, $id = null) {

        if ($dados) {
            if ($id) {
                $this->db->where('idConsulta', $id);
                if ($this->db->update("Consulta", $dados)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                if ($this->db->insert("Consulta", $dados)) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }

    /**
     * Recupera o registro do banco de dados
     * @param $id - Se indicado, retorna somente um registro, caso contário, todos os registros.
     * @return objeto da banco de dados da tabela cadastros
     */
    public function get($id = null) {
        if ($id) {
            $this->db->where('idProtocolo', $id);
        }
        $this->db->order_by("idProtocolo", 'desc');
        return $this->db->get('Protocolo');
    }

    /**
     * Deleta um registro.
     * @param $id do registro a ser deletado
     * @return boolean;
     */
    public function delete($id = null) {
        if ($id) {
            return $this->db->where('idConsulta', $id)->delete('Consulta');
        }
    }

}
