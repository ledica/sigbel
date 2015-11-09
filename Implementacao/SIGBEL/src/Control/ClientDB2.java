package Control;

import Model.Cliente;
import Model.Consulta;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

public class ClientDB2 {

    Connection connection = null;

    public boolean insert(Cliente client) {
        System.out.println("insertCliente");
        // inicia a conexao com o Banco de dados chamando
        // a classe Connect
        connection = Connect.getInstance().getConnection();
        System.out.println("Conectado e preparando insert");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
            java.util.Date dataUtil = new java.util.Date();
            java.sql.Date dataSql = new java.sql.Date(client.getDataNascimento().getTime());
            java.sql.Date dataSql2 = new java.sql.Date(client.getDataCadastro().getTime());

            String sql = "INSERT INTO Cliente (nomeCliente,telefone,email,dataNascimento,"
                    + "dataCadastro,endereco,numeroEndereco,bairro,cidade,ocupacao,"
                    + "profissao,sexo,numeroCPF,numeroRG) VALUES ('"
                    + client.getNome() + "','" + client.getTelefone() + "','"
                    + client.getEmail() + "','" + dataSql + "','" + dataSql2 + "','"
                    + client.getEndereco() + "','" + client.getNumeroEndereco() + "','"
                    + client.getBairro() + "','" + client.getCidade() + "','" + client.getOcupacao() + "','"
                    + client.getProfissao() + "','" + client.getSexo() + "','" + client.getNumeroCPF() + "','"
                    + client.getNumeroRG()
                    + "');";
            System.out.println("SQL: " + sql);
            stmt.executeUpdate(sql);
            // Incluindo cliente na listClient que vai ser retornada
            return true;
        } catch (SQLException e) {
            System.out.println(e.getMessage());
            return false;
        } finally {
            // este bloco finally sempre executa na instrução try para
            // fechar a conexão a cada conexão aberta
            try {
                stmt.close();
                connection.close();
            } catch (SQLException e) {
                System.out.println("Erro ao desconectar " + e.getMessage());
            }
        }
    } // fim do metodo InserirCliente

    public boolean atualizarCliente(Cliente client) {
        System.out.println("atualizarClient");
        // inicia a conexao com o Banco de dados chamando
        // a classe Conexao
        connection = Connect.getInstance().getConnection();
        System.out.println("conectado e preparando para atualizar");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();

            String sql = "UPDATE Cliente SET nomeCliente = '" + client.getNome() + "' WHERE codaluno = " + client.getIdCliente() + ";";
            System.out.println("SQL: " + sql);
            stmt.executeUpdate(sql);
            // Incluindo client na listaClientes que vai ser retornada
            return true;
        } catch (SQLException e) {
            System.out.println(e.getMessage());
            return false;
        } finally {
            // este bloco finally sempre executa na instrução try para
            // fechar a conexão a cada conexão aberta
            try {
                stmt.close();
                connection.close();
            } catch (SQLException e) {
                System.out.println("Erro ao desconectar" + e.getMessage());
            }
        }
    }

    public ArrayList<Cliente> getListClient() {
        ArrayList<Cliente> listClient = new ArrayList<Cliente>();

        connection = Connect.getInstance().getConnection();
        System.out.println("conectado e preparando listagem");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM Cliente ORDER BY idCliente");
            // Incluindo cliente na listClient que vai ser retornada
            while (rs.next()) {
                Cliente client = new Cliente(rs.getInt("idCliente"),
                        rs.getString("nomeCliente"), rs.getString("numeroCPF"),
                        rs.getString("numeroRG"), rs.getDate("dataNascimento"),
                        rs.getString("endereco"), rs.getString("numeroEndereco"),
                        rs.getString("bairro"), rs.getString("cidade"), rs.getString("telefone"),
                        rs.getString("email"), rs.getDate("dataCadastro")
                );
                Statement stmt2 = connection.createStatement();
           
                listClient.add(client);
            }
        } catch (SQLException e) {
            System.out.println(e.getMessage());
            return null;
        } finally {

            try {
                stmt.close();
                connection.close();
            } catch (SQLException e) {
                System.out.println("Erro ao desconectar" + e.getMessage());
            }
        }
        return listClient;
    } // final do metodo que retorna a lista de clientes

    // deleta cliente
    public boolean deleteClient(Cliente client) {
        System.out.println("excluirCliente");
        // inicia a conexao com o Banco de dados chamando
        // a classe Conexao
        connection = Connect.getInstance().getConnection();
        System.out.println("conectado. Preparando para excluir");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();

            String sql = "DELETE FROM Cliente WHERE idCliente = " + client.getIdCliente() + ";";
            System.out.println("SQL: " + sql);
            stmt.executeUpdate(sql);
            // Incluindo cliente na listaClientes que vai ser retornada
            return true;
        } catch (SQLException e) {
            System.out.println(e.getMessage());
            return false;
        } finally {
            // este bloco finally sempre executa na instrução try para
            // fechar a conexão a cada conexão aberta
            try {
                stmt.close();
                connection.close();
            } catch (SQLException e) {
                System.out.println("Erro ao desconectar" + e.getMessage());
            }
        }
    }//fim do metodo que deleta o cliente

}
