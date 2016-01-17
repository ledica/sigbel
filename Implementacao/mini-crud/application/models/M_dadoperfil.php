<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_dadoperfil extends CI_Model {

    /**
     * Grava os dados na tabela.
     * @param $dados. Array que contém os campos a serem inseridos
     * @param Se for passado o $id via parâmetro, então atualizo o registro em vez de inseri-lo.
     * @return boolean
     */
    public function store($dados = null, $id = null) {

        if ($dados) {
            if ($id) {
                $this->db->where('idDadoComplementar', $id);
                if ($this->db->update("DadoComplementarPerfil", $dados)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                if ($this->db->insert("DadoComplementarPerfil", $dados)) {
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
    public function get($id = null,$idCliente=null) {
        if($idCliente){
            $this->db->where('idCliente', $idCliente);
        }       
        if ($id) {
            $this->db->where('idDadoComplementar', $id);
        }
        $this->db->order_by("idDadoComplementar", 'desc');
        return $this->db->get('DadoComplementarPerfil');
    }

    /**
     * Deleta um registro.
     * @param $id do registro a ser deletado
     * @return boolean;
     */
    public function delete($id = null) {
        if ($id) {
            return $this->db->where('idDadoComplementar', $id)->delete('DadoComplementarPerfil');
        }
    }

}
