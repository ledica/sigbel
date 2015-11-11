/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Control;

import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;

/**
 *
 * @author root
 */
public class GeraTabelas {

    public static void main(String[] args) {
        EntityManagerFactory factory = Persistence.
                createEntityManagerFactory("SIGBELPU");
        factory.close();
    }
}
