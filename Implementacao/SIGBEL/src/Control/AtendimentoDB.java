package Control;

import Model.Atendimento;
import Model.Consulta;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

public class AtendimentoDB {

    Connection connection = null;

    public boolean insert(Atendimento atendimento) {
        System.out.println("insertAtendimento");
        // inicia a conexao com o Banco de dados chamando
        // a classe Connect
        connection = Connect.getInstance().getConnection();
        System.out.println("Conectado e preparando insert");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
           
            String sql = "INSERT INTO Atendimento (idConsulta) VALUES ('"
                    + atendimento.getIdConsulta()+"');";
            System.out.println("SQL: " + sql);
            stmt.executeUpdate(sql);
            // Incluindo consulta na listAtendimento que vai ser retornada
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
     public boolean atualizar(Atendimento Atendimento) {
        System.out.println("atualizarAtendimento");
        // inicia a conexao com o Banco de dados chamando
        // a classe Conexao
        connection = Connect.getInstance().getConnection();
        System.out.println("conectado e preparando para atualizar");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
            String sql = "UPDATE Consulta SET dataConsulta = '" +
                    "' WHERE idConsulta = " +  ";";
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

    public ArrayList<Atendimento> getList() {
        ArrayList<Atendimento> listAtendimento = new ArrayList<Atendimento>();

        connection = Connect.getInstance().getConnection();
        System.out.println("conectado e preparando listagem");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM Atendimento");
            // Incluindo consulta na listAtendimento que vai ser retornada
            while (rs.next()) {
 
                Atendimento atendimento = new Atendimento(rs.getInt("idConsulta"), 
                        rs.getFloat("apendiceXifoide"),rs.getFloat("anguloDeTales"),
                        rs.getFloat("abdomeInferior"),rs.getFloat("peso"),
                        rs.getFloat("axilar"),rs.getFloat("bracoDireito10cm"),
                        rs.getFloat("bracoEsquerdo10cm"),rs.getFloat("bracoDireito20cm"),
                        rs.getFloat("bracoEsquerdo20cm"),rs.getFloat("coxaDireita10cm"),
                        rs.getFloat("coxaDireita20cm"),rs.getFloat("coxaDireita30cm"),
                        rs.getFloat("coxaEsquerda10cm"),rs.getFloat("coxaEsquerda20cm"),
                        rs.getFloat("coxaEsquerda30cm"),rs.getFloat("pernaEsquerda10cm"),
                        rs.getFloat("pernaEsquerda20cm"),rs.getFloat("pernaDireita10cm"),
                        rs.getFloat("coxaDireita20cm")
                );
                listAtendimento.add(atendimento);
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
        return listAtendimento;
    } // final do metodo que retorna a lista de consultas
    
    
    public Consulta getConsulta(Atendimento atendimento) {
        Consulta consulta = null;

        connection = Connect.getInstance().getConnection();
        System.out.println("conectado e preparando listagem");
        Statement stmt = null;
        try {
            stmt = connection.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT SELECT Consulta.*, Cliente.nomeCliente \n"
                    + "FROM Consulta,Cliente \n"
                    + "where Consulta.idCliente='" + atendimento.getIdConsulta()+ "' order BY dataConsulta");
            // Incluindo consulta na listAtendimento que vai ser retornada
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
    } // final do metodo que retorna a lista de consultas
}
