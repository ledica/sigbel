package Main;


import javax.swing.JFrame;
import Model.Cliente;

public class Main extends JFrame{
Integer e=155428;
static Cliente c;

    public static void main(String[] args) {
        
        System.out.print(c.getNome());
    }

    public Main() {
        Main.c = new Cliente(e);
    }

}
