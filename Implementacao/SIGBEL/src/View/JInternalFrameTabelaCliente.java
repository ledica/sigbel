package View;

import Control.ClientDB;
import Model.Cliente;
import java.beans.PropertyVetoException;
import java.util.ArrayList;
import java.util.HashMap;
import javax.swing.plaf.basic.BasicInternalFrameUI;
import javax.swing.table.DefaultTableModel;

public class JInternalFrameTabelaCliente extends javax.swing.JInternalFrame {

    private HashMap<String, Cliente> mapCliente = new HashMap<>();

    public JInternalFrameTabelaCliente() {
        initComponents();
        getDataTableClient();
       
          ((BasicInternalFrameUI) this.getUI()).setNorthPane(null); //retirar o painel superior  
        this.setBorder(null);//retirar bordas  
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jScrollPane1 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();
        jButton1 = new javax.swing.JButton();
        jButton2 = new javax.swing.JButton();
        jButton3 = new javax.swing.JButton();
        jButton4 = new javax.swing.JButton();

        setClosable(true);
        setIconifiable(true);
        setMaximizable(true);
        setResizable(true);
        setTitle("Lista de Clientes");
        setInheritsPopupMenu(true);
        setVisible(true);

        jTable1.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null, null}
            },
            new String [] {
                "Código", "Nome", "RG", "CPF", "Telefone"
            }
        ) {
            Class[] types = new Class [] {
                java.lang.Integer.class, java.lang.String.class, java.lang.String.class, java.lang.String.class, java.lang.String.class
            };
            boolean[] canEdit = new boolean [] {
                false, false, false, false, true
            };

            public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
            }

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jTable1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jTable1MouseClicked(evt);
            }
        });
        jScrollPane1.setViewportView(jTable1);

        jButton1.setText("Novo Cliente");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });

        jButton2.setText("Editar");

        jButton3.setText("Excluir");

        jButton4.setText("Salvar");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 557, Short.MAX_VALUE)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jButton1)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(jButton2)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(jButton3)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(jButton4)))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addGap(0, 0, 0)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jButton1)
                    .addComponent(jButton2)
                    .addComponent(jButton3)
                    .addComponent(jButton4))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 284, Short.MAX_VALUE)
                .addContainerGap())
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jTable1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jTable1MouseClicked
        if (evt.getClickCount() == 2) {
            String idCliente = jTable1.getValueAt(jTable1.getSelectedRow(), 0).toString();
            JInternalFrameCliente e = new JInternalFrameCliente(this.mapCliente.get(idCliente));
            e.setVisible(true);
            this.getDesktopPane().add(e);
            try {
                e.setMaximum(true);
            } catch (PropertyVetoException ex) {
            }
            dispose();
        }
    }//GEN-LAST:event_jTable1MouseClicked

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        JInternalFrameCliente e = new JInternalFrameCliente();
        e.setVisible(true);
        this.getDesktopPane().add(e);
        try {
            e.setMaximum(true);
        } catch (PropertyVetoException ex) {
            System.out.println(ex.getMessage());
        }
        this.getDesktopPane().updateUI();
        this.dispose();

    }//GEN-LAST:event_jButton1ActionPerformed


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JButton jButton3;
    private javax.swing.JButton jButton4;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JTable jTable1;
    // End of variables declaration//GEN-END:variables
private ArrayList<Cliente> getDataTableClient() {
       
        DefaultTableModel model = (DefaultTableModel) jTable1.getModel();

        // atribui 0 linhas à coluna
        model.setNumRows(0);

        // atribui um tamanho fixo a coluna codigo
        jTable1.getColumnModel().getColumn(0).setPreferredWidth(2);

        ArrayList<Cliente> listClient = new ClientDB().getListClient();
       
        //adiciona alunos as tabelas

        for (Cliente client:listClient) {
            this.mapCliente.put(String.valueOf(client.getIdCliente()), client);
            this.mapCliente.put(String.valueOf(client.getIdCliente()), client);
            model.addRow(new Object[]{client.getIdCliente(), client.getNome(),
                client.getNumeroRG(), client.getNumeroCPF(), client.getTelefone()
            });
        }
        return listClient;
    }
}
