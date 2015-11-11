package Control;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class Connect {

    Connection con = null;
    private static Connect instance = null;

    public Connect() {
        init();
    }
    
    public void init() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            System.out.println("Carreando Driver");
        } catch (ClassNotFoundException e) {
            System.out.println("Nao pode conectar com MySql!");
        }
    }

    public static Connect getInstance() {
        if (instance == null) {
            instance = new Connect();
        }
        return instance;
    }

    public Connection getConnection() {
        try {
            if ((con == null) || (con.isClosed())) {
                con = DriverManager.getConnection("jdbc:mysql://localhost/sigbel", "root", "12345678");
                System.out.println("Conectado com Banco de Dados");
            }
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        return con;
    }

    public void destroy() {
        try {
            con.close();
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
    }

    
}
