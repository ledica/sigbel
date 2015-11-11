package Main;


import javax.swing.JFrame;
import Model.Cliente;
import Model.Consulta;
import java.sql.Date;
import javax.swing.JOptionPane;

public class Main extends JFrame{


    public static void main(String[] args) {
       Cliente e=new Cliente();
       System.out.print(e.encontradoCPF(155428).getNomeCliente());
      
        
    }

   
}
