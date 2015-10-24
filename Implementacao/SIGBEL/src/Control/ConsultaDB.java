package Control;

import Model.Cliente;
import Model.Consulta;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

public class ConsultaDB {

    Connection connection = null;

    public boolean insert(Consulta consulta) {
        System.out.println("insertConsulta");
        // inicia a conexao com o Banco de dados chamando
        // a classe Connect
        connection = Connect.getInstance().getConnection();
        System.out.println("Conectado e preparando insert");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
            java.util.Date dataUtil = new java.util.Date();
            java.sql.Date dataSql = new java.sql.Date(consulta.getDataConsulta().getTime());
            java.sql.Time horaSql = new java.sql.Time(consulta.getHorario().getTime());

            String sql = "INSERT INTO Consulta (idCliente,dataConsulta,horarioInicio) VALUES ('"
                    + consulta.getIdCliente() + "','" + dataSql + "','" + horaSql + "');";
            System.out.println("SQL: " + sql);
            stmt.executeUpdate(sql);
            // Incluindo consulta na listConsulta que vai ser retornada
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

    public boolean atualizar(Consulta consulta) {
        System.out.println("atualizarConsulta");
        // inicia a conexao com o Banco de dados chamando
        // a classe Conexao
        connection = Connect.getInstance().getConnection();
        System.out.println("conectado e preparando para atualizar");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
            String sql = "UPDATE Consulta SET dataConsulta = '" + consulta.getIdCliente() + "' WHERE idConsulta = " + consulta.getIdConsulta() + ";";
            System.out.println("SQL: " + sql);
            stmt.executeUpdate(sql);
            // Incluindo client na listaConsultas que vai ser retornada
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

    public ArrayList<Consulta> getListConsulta() {
        ArrayList<Consulta> listConsulta = new ArrayList<Consulta>();

        connection = Connect.getInstance().getConnection();
        System.out.println("conectado e preparando listagem");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT Consulta.*, Cliente.nomeCliente \n"
                    + "FROM Consulta,Cliente \n"
                    + "where Consulta.idCliente=Cliente.idCliente order BY dataConsulta");
            // Incluindo consulta na listConsulta que vai ser retornada
            while (rs.next()) {
                //int idConsulta, int idCliente, Date data, Date horario, String nomeCliente
                Consulta consulta = new Consulta(rs.getInt("idConsulta"), rs.getInt("idCliente"),
                        rs.getDate("dataConsulta"), rs.getTime("horarioInicio"), rs.getString("nomeCliente")
                );
                listConsulta.add(consulta);
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
        return listConsulta;
    } // final do metodo que retorna a lista de consultas

    /**
     * Retorna todas as consultas do cliente especificado do parametro
     *
     * @param cliente
     * @return
     */
    public ArrayList<Consulta> getListConsulta(Cliente cliente) {
        ArrayList<Consulta> listConsulta = new ArrayList<Consulta>();

        connection = Connect.getInstance().getConnection();
        System.out.println("conectado e preparando listagem");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT Consulta.*, Cliente.nomeCliente \n"
                    + "FROM Consulta,Cliente \n"
                    + "where Consulta.idCliente='" + cliente.getIdCliente() + "' order BY dataConsulta");
            // Incluindo consulta na listConsulta que vai ser retornada
            while (rs.next()) {
                //int idConsulta, int idCliente, Date data, Date horario, String nomeCliente
                Consulta consulta = new Consulta(rs.getInt("idConsulta"), rs.getInt("idCliente"),
                        rs.getDate("dataConsulta"), rs.getTime("horarioInicio"), cliente
                );

                listConsulta.add(consulta);
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
        return listConsulta;
    } // final do metodo que retorna a lista de consultas

    public Consulta getConsulta(int idConsulta) {

        Consulta consulta = null;
        connection = Connect.getInstance().getConnection();
        System.out.println("conectado e preparando listagem");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT Consulta.* \n"
                    + "FROM Consulta \n"
                    + "where Consulta.idConsulta='" + idConsulta + "' order BY dataConsulta");
            // Incluindo consulta na listConsulta que vai ser retornada
            while (rs.next()) {
                //int idConsulta, int idCliente, Date data, Date horario, String nomeCliente
                consulta = new Consulta(rs.getInt("idConsulta"), rs.getInt("idCliente"),
                        rs.getDate("dataConsulta"), rs.getTime("horarioInicio")
                );

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
        return consulta;
    } 

    // deleta cliente
    public boolean delete(Consulta consulta) {
        System.out.println("excluirConsulta");
        // inicia a conexao com o Banco de dados chamando
        // a classe Conexao
        connection = Connect.getInstance().getConnection();
        System.out.println("conectado. Preparando para excluir");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();

            String sql = "DELETE FROM Consulta WHERE idConsulta = " + consulta.getIdConsulta() + ";";
            System.out.println("SQL: " + sql);
            stmt.executeUpdate(sql);
            // Incluindo consulta na listaConsulta que vai ser retornada
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
    }//fim do metodo que deleta o consulta

}
