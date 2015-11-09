package View;

import Control.ClientDB2;
import Model.Cliente;
import java.beans.PropertyVetoException;
import java.text.ParseException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;
import javax.swing.event.TreeSelectionEvent;
import javax.swing.event.TreeSelectionListener;
import javax.swing.plaf.basic.BasicInternalFrameUI;
import javax.swing.tree.DefaultMutableTreeNode;
import org.jfree.chart.ChartFactory;
import org.jfree.chart.ChartPanel;
import org.jfree.chart.JFreeChart;
import org.jfree.data.time.Month;
import org.jfree.data.time.TimeSeries;
import org.jfree.data.time.TimeSeriesCollection;
import org.jfree.data.xy.XYDataset;

public class JInternalFrameCliente extends javax.swing.JInternalFrame {

    public JInternalFrameContatoCliente contatoCliente;
    private Cliente cliente;

    public JInternalFrameCliente() {

        initComponents();
        this.jTreeMenuLateral.setVisible(false);
        this.contatoCliente = new JInternalFrameContatoCliente();
        this.contatoCliente.setVisible(true);

        this.jDesktopPane.add(contatoCliente);
        try {
            contatoCliente.setMaximum(true);
        } catch (PropertyVetoException ex) {
        }
        this.jDesktopPane.updateUI();
        this.jTreeMenuLateral.getSelectionModel().addTreeSelectionListener(new TreeSelectionListener() {
            @Override
            public void valueChanged(TreeSelectionEvent e) {
                DefaultMutableTreeNode selectedNode = (DefaultMutableTreeNode) jTreeMenuLateral.getLastSelectedPathComponent();
                setContudo(selectedNode.getUserObject().toString());
            }
        });
          ((BasicInternalFrameUI) this.getUI()).setNorthPane(null); //retirar o painel superior  
        this.setBorder(null);//retirar bordas  
    }

    public JInternalFrameCliente(Cliente cliente) {
        this.cliente = cliente;
        initComponents();
        this.contatoCliente = new JInternalFrameContatoCliente(this.cliente);
        this.contatoCliente.setVisible(true);
        this.jDesktopPane.add(contatoCliente);
        try {
            contatoCliente.setMaximum(true);
        } catch (PropertyVetoException ex) {
        }
        this.jLabelNomeCliente.setText(cliente.getNome());
        if ("F".equals(cliente.getSexo())) {
            this.jLabelGenero.setText("Sexo: Femenino");
        } else {
            this.jLabelGenero.setText("Sexo: Femenino");
        }
        this.jLabelNumeroCPf.setText(cliente.getNumeroCPF());

        this.jTreeMenuLateral.getSelectionModel().addTreeSelectionListener(new TreeSelectionListener() {
            @Override
            public void valueChanged(TreeSelectionEvent e) {
                DefaultMutableTreeNode selectedNode = (DefaultMutableTreeNode) jTreeMenuLateral.getLastSelectedPathComponent();
                setContudo(selectedNode.getUserObject().toString());
            }
        });

         ((BasicInternalFrameUI) this.getUI()).setNorthPane(null); //retirar o painel superior  
        this.setBorder(null);//retirar bordas  
        this.jDesktopPane.updateUI();
        
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jTreeMenuLateral = new javax.swing.JTree();
        jPanel2 = new javax.swing.JPanel();
        jLabel6 = new javax.swing.JLabel();
        jLabelNomeCliente = new javax.swing.JLabel();
        jLabelGenero = new javax.swing.JLabel();
        jLabelIdade = new javax.swing.JLabel();
        jButton1 = new javax.swing.JButton();
        jButton2 = new javax.swing.JButton();
        jLabelNumeroCPf = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jPanel3 = new javax.swing.JPanel();
        jDesktopPane = new javax.swing.JDesktopPane();

        setClosable(true);
        setIconifiable(true);
        setMaximizable(true);
        setResizable(true);
        setTitle("Perfil do Cliente");
        setVisible(true);

        jPanel1.setBorder(new javax.swing.border.MatteBorder(null));

        javax.swing.tree.DefaultMutableTreeNode treeNode1 = new javax.swing.tree.DefaultMutableTreeNode("Menu Cliente");
        javax.swing.tree.DefaultMutableTreeNode treeNode2 = new javax.swing.tree.DefaultMutableTreeNode("Consultas");
        treeNode1.add(treeNode2);
        treeNode2 = new javax.swing.tree.DefaultMutableTreeNode("Cadastro Atendimento");
        treeNode1.add(treeNode2);
        treeNode2 = new javax.swing.tree.DefaultMutableTreeNode("Pagamentos");
        treeNode1.add(treeNode2);
        treeNode2 = new javax.swing.tree.DefaultMutableTreeNode("Perfil");
        treeNode1.add(treeNode2);
        treeNode2 = new javax.swing.tree.DefaultMutableTreeNode("Relatório de Evolução");
        treeNode1.add(treeNode2);
        treeNode2 = new javax.swing.tree.DefaultMutableTreeNode("Editar Contato");
        treeNode1.add(treeNode2);
        treeNode2 = new javax.swing.tree.DefaultMutableTreeNode("Excluir Cliente");
        treeNode1.add(treeNode2);
        jTreeMenuLateral.setModel(new javax.swing.tree.DefaultTreeModel(treeNode1));

        jPanel2.setBorder(new javax.swing.border.MatteBorder(null));

        jLabel6.setText("Paciente:");

        jLabelNomeCliente.setText("P. Van den Berghe");

        jLabelGenero.setText("Feminino");

        jLabelIdade.setText("27 anos");

        jButton1.setText("Salvar");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });

        jButton2.setText("Fechar");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });

        jLabelNumeroCPf.setText("423.987.123-07");

        jLabel2.setText("Foto");
        jLabel2.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addGap(6, 6, 6)
                .addComponent(jLabel2, javax.swing.GroupLayout.PREFERRED_SIZE, 40, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(jLabel6)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLabelNomeCliente, javax.swing.GroupLayout.PREFERRED_SIZE, 194, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 58, Short.MAX_VALUE)
                .addComponent(jLabelNumeroCPf)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jLabelGenero)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLabelIdade)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jButton1)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jButton2)
                .addContainerGap())
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel6)
                    .addComponent(jLabelNomeCliente)
                    .addComponent(jLabelGenero)
                    .addComponent(jLabelIdade)
                    .addComponent(jButton1)
                    .addComponent(jButton2)
                    .addComponent(jLabelNumeroCPf)
                    .addComponent(jLabel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addContainerGap())
        );

        javax.swing.GroupLayout jDesktopPaneLayout = new javax.swing.GroupLayout(jDesktopPane);
        jDesktopPane.setLayout(jDesktopPaneLayout);
        jDesktopPaneLayout.setHorizontalGroup(
            jDesktopPaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 0, Short.MAX_VALUE)
        );
        jDesktopPaneLayout.setVerticalGroup(
            jDesktopPaneLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 0, Short.MAX_VALUE)
        );

        javax.swing.GroupLayout jPanel3Layout = new javax.swing.GroupLayout(jPanel3);
        jPanel3.setLayout(jPanel3Layout);
        jPanel3Layout.setHorizontalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jDesktopPane)
        );
        jPanel3Layout.setVerticalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jDesktopPane)
        );

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addComponent(jTreeMenuLateral, javax.swing.GroupLayout.PREFERRED_SIZE, 240, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jPanel3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addContainerGap())
            .addComponent(jPanel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jTreeMenuLateral, javax.swing.GroupLayout.DEFAULT_SIZE, 215, Short.MAX_VALUE)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(jPanel3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addContainerGap())))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        dispose();
    }//GEN-LAST:event_jButton2ActionPerformed

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        //novo Cadastro
        ClientDB2 clientDB = new ClientDB2();
        try {
            this.cliente = contatoCliente.getDadosFrameClient();
        } catch (ParseException ex) {
            Logger.getLogger(JInternalFrameCliente.class.getName()).log(Level.SEVERE, null, ex);
        }
        if (clientDB.insert(this.cliente)) {
            JOptionPane.showMessageDialog(this, "Incluido com sucesso!", "Manutenção de Aluno", 1);
            JInternalFrameCliente e = new JInternalFrameCliente(this.cliente);
            e.setVisible(true);
            this.getDesktopPane().add(e);
            try {
                e.setMaximum(true);
            } catch (PropertyVetoException ex) {
                System.out.printf(ex.getMessage());
            }
            // dispose();
        } else {
            JOptionPane.showMessageDialog(this, "Inclusão não realizada!", "Manutenção de Aluno", 0);
        }

    }//GEN-LAST:event_jButton1ActionPerformed


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JDesktopPane jDesktopPane;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabelGenero;
    private javax.swing.JLabel jLabelIdade;
    private javax.swing.JLabel jLabelNomeCliente;
    private javax.swing.JLabel jLabelNumeroCPf;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JTree jTreeMenuLateral;
    // End of variables declaration//GEN-END:variables

    public void setContudo(String menu) {
        switch (menu) {
            case "cadastro":
                //
                break;
            case "Consultas": {
                JDialogConsulta e = new JDialogConsulta(cliente);
                e.setVisible(true);
                this.jDesktopPane.removeAll();
                this.jDesktopPane.add(e);
                try {
                    e.setMaximum(true);
                } catch (PropertyVetoException ex) {
                    System.out.println(ex.getMessage());
                }
                this.jDesktopPane.updateUI();
            }
            break;
            case "Cadastro Atendimento":
                 {
                JInternalFrameAtendimento e = new JInternalFrameAtendimento();
                e.setVisible(true);
                this.jDesktopPane.removeAll();
                this.jDesktopPane.add(e);
                try {
                    e.setMaximum(true);
                } catch (PropertyVetoException ex) {
                    System.out.println(ex.getMessage());
                }
                this.jDesktopPane.updateUI();
            }
                break;
            case "Perfil":
                {
                JInternalFramePerfil e = new JInternalFramePerfil();
                e.setVisible(true);
                this.jDesktopPane.removeAll();
                this.jDesktopPane.add(e);
                try {
                    e.setMaximum(true);
                } catch (PropertyVetoException ex) {
                    System.out.println(ex.getMessage());
                }
                this.jDesktopPane.updateUI();
            }
                break;
          
            case "Pagamentos":
                {
                JInternalFramePagamento e = new JInternalFramePagamento();
                e.setVisible(true);
                this.jDesktopPane.removeAll();
                this.jDesktopPane.add(e);
                try {
                    e.setMaximum(true);
                } catch (PropertyVetoException ex) {
                    System.out.println(ex.getMessage());
                }
                this.jDesktopPane.updateUI();
            }
                break;
            
            case "Histórico de Sessões":
               
                break;
            case "Editar Contato": {
                this.contatoCliente = new JInternalFrameContatoCliente(cliente);
                this.contatoCliente.setVisible(true);
                this.jDesktopPane.removeAll();
                this.jDesktopPane.add(contatoCliente);
                try {
                    contatoCliente.setMaximum(true);
                } catch (PropertyVetoException ex) {
                    System.out.println(ex.getMessage());
                }
                this.jDesktopPane.updateUI();
            }
            break;
            case "Excluir Cliente": {
                ClientDB2 clientbd = new ClientDB2();
                if (JOptionPane.showConfirmDialog(rootPane, "Confirma exclusão?", "Confirmação de exlusão de Aluno", 1, 1) == 0) {
                    if (clientbd.deleteClient(cliente)) {
                        JOptionPane.showMessageDialog(this, "Excluido com sucesso!", "Manutenção de Aluno", 1);
                    } else {
                        JOptionPane.showMessageDialog(this, "Exclusão não realizada!", "Manutenção de Aluno", 0);
                    }
                    JInternalFrameTabelaCliente e = new JInternalFrameTabelaCliente();
                    e.setVisible(true);
                    this.getDesktopPane().add(e);
                    try {
                        e.setMaximum(true);
                    } catch (PropertyVetoException ex) {
                    }
                    this.getDesktopPane().updateUI();
                    this.dispose();
                } else {
                    JOptionPane.showMessageDialog(this, "Exclusão cancelada pelo usuário!", "Manutenção de Aluno", 0);
                }
            }
            break;
            case "Relatório de Evolução": {
                this.jDesktopPane.removeAll();
                this.jDesktopPane.updateUI();
                JOptionPane.showMessageDialog(null, getGrafico(), "Information", JOptionPane.INFORMATION_MESSAGE);
            }
            break;
            default:
                break;
        }
    }

    public ChartPanel getGrafico() {

        JFreeChart chart = ChartFactory.createTimeSeriesChart("Relatório de Evolução", // titulo do grafico
                "meses", // eixo X
                "cm", // eixo Y
                createDataset(), // dados para o gr�fico
                true,
                true,
                false);

        ChartPanel chartPanel = new ChartPanel(chart, false);
        chartPanel.setPreferredSize(new java.awt.Dimension(500, 270));
        chartPanel.setDisplayToolTips(true);
        chartPanel.setMouseZoomable(true, false);

        return chartPanel;
    }

    private XYDataset createDataset() {

        TimeSeries s0 = new TimeSeries("Coxa Esq.", Month.class);
        s0.add(new Month(1, 2005), 47.8);
        s0.add(new Month(2, 2005), 50.8);
        s0.add(new Month(3, 2005), 50.3);
        s0.add(new Month(4, 2005), 50.8);
        s0.add(new Month(5, 2005), 53.6);
        s0.add(new Month(6, 2005), 54.8);

        TimeSeries s1 = new TimeSeries("Coxa Dir.", Month.class);
        s1.add(new Month(1, 2005), 45.8);
        s1.add(new Month(2, 2005), 46.8);
        s1.add(new Month(3, 2005), 47.3);
        s1.add(new Month(4, 2005), 48.8);
        s1.add(new Month(5, 2005), 49.6);
        s1.add(new Month(6, 2005), 50.8);

        TimeSeries s2 = new TimeSeries("Braço Esq.", Month.class);
        s2.add(new Month(1, 2005), 50.6);
        s2.add(new Month(2, 2005), 55.6);
        s2.add(new Month(3, 2005), 50.2);
        s2.add(new Month(4, 2005), 45.2);
        s2.add(new Month(5, 2005), 40.1);
        s2.add(new Month(6, 2005), 50.6);

        TimeSeries s3 = new TimeSeries("Braço Dir.", Month.class);
        s3.add(new Month(1, 2005), 50.6);
        s3.add(new Month(2, 2005), 50.6);
        s3.add(new Month(3, 2005), 50.2);
        s3.add(new Month(4, 2005), 45.2);
        s3.add(new Month(5, 2005), 40.1);
        s3.add(new Month(6, 2005), 40.6);

        TimeSeriesCollection dataset = new TimeSeriesCollection();
        dataset.addSeries(s1);
        dataset.addSeries(s2);
        dataset.addSeries(s0);
        dataset.addSeries(s3);
        dataset.setDomainIsPointsInTime(true);
        return dataset;

    }
}
