/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package View;

import Model.Cliente;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import javax.swing.plaf.basic.BasicInternalFrameUI;

/**
 *
 * @author leticia
 */
public class JInternalFrameContatoCliente extends javax.swing.JInternalFrame {

    Cliente cliente;

    public JInternalFrameContatoCliente() {
        initComponents();
        java.util.Date dataUtil = new java.util.Date();
        this.jTextFieldDataCadastro.setText(new SimpleDateFormat("dd/MM/yyyy").format(dataUtil.getTime()));

        this.jTextFieldDataNascimento.setFormats(new SimpleDateFormat("dd/MM/yyyy"));
        ((BasicInternalFrameUI) this.getUI()).setNorthPane(null); //retirar o painel superior  
        this.setBorder(null);//retirar bordas  
    }

    public JInternalFrameContatoCliente(Cliente cliente) {
        this.cliente = cliente;
        initComponents();
        this.jTextFieldNome.setText(cliente.getNome());
        this.jTextField1Idade.setText(String.valueOf(cliente.getIdade()));
        this.jTextFieldDataCadastro.setText(new SimpleDateFormat("dd/MM/yyyy").format(this.cliente.getDataCadastro()));
        this.jTextFieldDataNascimento.setDate(this.cliente.getDataNascimento());
        this.jTextFieldDataNascimento.setFormats(new SimpleDateFormat("dd/MM/yyyy"));
        this.jTextFieldDataNascimento.setFormats(new SimpleDateFormat("dd/MM/yyyy"));
        this.jTextFieldBairro.setText(cliente.getBairro());
        this.jTextFieldEmail.setText(cliente.getEmail());
        this.jTextFieldEndereco.setText(cliente.getEndereco());
        this.jTextFieldNumeroEndereco.setText(cliente.getNumeroEndereco());
        this.jTextFieldTelefone.setText(cliente.getTelefone());
        this.jTextFieldCPF.setText(cliente.getNumeroCPF());
        this.jTextFieldRG.setText(cliente.getNumeroRG());
        this.jTextFieldCodigo.setText(String.valueOf(cliente.getIdCliente()));
        this.jTextFieldCidade.setText(cliente.getCidade());
        this.jTextFieldOcupacao.setText(cliente.getOcupacao());
        this.jTextFieldProfissao.setText(cliente.getProfissao());
        // this.jLabelFoto.setIcon((Icon) cliente.getFoto());
        ((BasicInternalFrameUI) this.getUI()).setNorthPane(null); //retirar o painel superior  
        this.setBorder(null);//retirar bordas  

    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanelInsertClient = new javax.swing.JPanel();
        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();
        jLabel6 = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        jTextFieldCodigo = new javax.swing.JTextField();
        jTextFieldNome = new javax.swing.JTextField();
        jTextFieldEndereco = new javax.swing.JTextField();
        jTextFieldNumeroEndereco = new javax.swing.JTextField();
        jTextFieldBairro = new javax.swing.JTextField();
        jTextFieldCidade = new javax.swing.JTextField();
        jLabel8 = new javax.swing.JLabel();
        jTextFieldRG = new javax.swing.JTextField();
        jLabel9 = new javax.swing.JLabel();
        jTextFieldCPF = new javax.swing.JTextField();
        jLabel10 = new javax.swing.JLabel();
        jTextFieldTelefone = new javax.swing.JTextField();
        jLabel11 = new javax.swing.JLabel();
        jTextFieldEmail = new javax.swing.JTextField();
        jLabel12 = new javax.swing.JLabel();
        jTextFieldDataCadastro = new javax.swing.JTextField();
        jLabel14 = new javax.swing.JLabel();
        jTextField1Idade = new javax.swing.JTextField();
        jLabelFoto = new javax.swing.JLabel();
        jComboBox1 = new javax.swing.JComboBox();
        jLabel15 = new javax.swing.JLabel();
        jLabel16 = new javax.swing.JLabel();
        jTextFieldOcupacao = new javax.swing.JTextField();
        jTextFieldProfissao = new javax.swing.JTextField();
        jLabel17 = new javax.swing.JLabel();
        jTextFieldDataNascimento = new org.jdesktop.swingx.JXDatePicker();

        setClosable(true);
        setIconifiable(true);
        setMaximizable(true);
        setResizable(true);

        jLabel1.setText("Código:");

        jLabel2.setText("Nome:");

        jLabel3.setText("Endereço:");

        jLabel4.setText("Número:");

        jLabel5.setText("Bairro:");

        jLabel6.setText("Cidade:");

        jLabel7.setText("Data Nascimento:");

        jTextFieldCodigo.setEditable(false);
        jTextFieldCodigo.setText("0");
        jTextFieldCodigo.setEnabled(false);
        jTextFieldCodigo.setFocusable(false);

        jTextFieldCidade.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jTextFieldCidadeActionPerformed(evt);
            }
        });

        jLabel8.setText("RG:");

        jLabel9.setText("CPF:");

        jLabel10.setText("Telefone:");

        jLabel11.setText("E-mail:");

        jLabel12.setText("Data Cadastro:");

        jTextFieldDataCadastro.setEditable(false);
        jTextFieldDataCadastro.setEnabled(false);

        jLabel14.setText("Idade:");

        jTextField1Idade.setEditable(false);
        jTextField1Idade.setEnabled(false);
        jTextField1Idade.setFocusable(false);
        jTextField1Idade.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jTextField1IdadeActionPerformed(evt);
            }
        });

        jLabelFoto.setText("Foto");
        jLabelFoto.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));

        jComboBox1.setModel(new javax.swing.DefaultComboBoxModel(new String[] { "F", "M" }));

        jLabel15.setText("Sexo:");

        jLabel16.setText("Ocupação:");

        jLabel17.setText("Profissão:");

        javax.swing.GroupLayout jPanelInsertClientLayout = new javax.swing.GroupLayout(jPanelInsertClient);
        jPanelInsertClient.setLayout(jPanelInsertClientLayout);
        jPanelInsertClientLayout.setHorizontalGroup(
            jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                        .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(jTextFieldEndereco, javax.swing.GroupLayout.PREFERRED_SIZE, 294, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel5, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.PREFERRED_SIZE, 71, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(jLabel6))
                    .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                        .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanelInsertClientLayout.createSequentialGroup()
                            .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                    .addComponent(jLabel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                    .addComponent(jLabel3, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                                .addComponent(jTextFieldCodigo, javax.swing.GroupLayout.PREFERRED_SIZE, 72, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                                    .addGap(18, 18, 18)
                                    .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                        .addComponent(jLabel2, javax.swing.GroupLayout.PREFERRED_SIZE, 71, javax.swing.GroupLayout.PREFERRED_SIZE)
                                        .addComponent(jTextFieldNome, javax.swing.GroupLayout.PREFERRED_SIZE, 440, javax.swing.GroupLayout.PREFERRED_SIZE)))
                                .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                                    .addGap(241, 241, 241)
                                    .addComponent(jLabel4))))
                        .addComponent(jTextFieldNumeroEndereco, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, 217, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                            .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(jLabel8)
                                .addComponent(jTextFieldRG, javax.swing.GroupLayout.PREFERRED_SIZE, 113, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addGap(18, 18, 18)
                            .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(jLabel9)
                                .addComponent(jTextFieldCPF, javax.swing.GroupLayout.PREFERRED_SIZE, 128, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addGap(18, 18, 18)
                            .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                                    .addComponent(jLabel7)
                                    .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                    .addComponent(jLabel14)
                                    .addGap(18, 18, 18)
                                    .addComponent(jLabel15))
                                .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                                    .addComponent(jTextFieldDataNascimento, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                    .addComponent(jTextField1Idade, javax.swing.GroupLayout.PREFERRED_SIZE, 43, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                    .addComponent(jComboBox1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))))
                        .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                            .addComponent(jTextFieldBairro, javax.swing.GroupLayout.PREFERRED_SIZE, 294, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addGap(18, 18, 18)
                            .addComponent(jTextFieldCidade, javax.swing.GroupLayout.PREFERRED_SIZE, 218, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addComponent(jLabel11)
                        .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                            .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(jTextFieldTelefone, javax.swing.GroupLayout.PREFERRED_SIZE, 164, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addComponent(jLabel10))
                            .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                            .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(jLabel16)
                                .addComponent(jTextFieldOcupacao, javax.swing.GroupLayout.PREFERRED_SIZE, 118, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addGap(18, 18, 18)
                            .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(jLabel17)
                                .addComponent(jTextFieldProfissao)))
                        .addComponent(jTextFieldEmail)))
                .addGap(18, 18, 18)
                .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jLabel12)
                    .addComponent(jTextFieldDataCadastro, javax.swing.GroupLayout.PREFERRED_SIZE, 113, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabelFoto, javax.swing.GroupLayout.PREFERRED_SIZE, 195, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(18, Short.MAX_VALUE))
        );
        jPanelInsertClientLayout.setVerticalGroup(
            jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel1)
                    .addComponent(jLabel2)
                    .addComponent(jLabel12))
                .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                        .addGap(2, 2, 2)
                        .addComponent(jTextFieldCodigo, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(16, 16, 16)
                        .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                                .addComponent(jLabel9)
                                .addComponent(jLabel8))
                            .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                                .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                                    .addComponent(jLabel14)
                                    .addComponent(jLabel15)
                                    .addComponent(jLabel7))
                                .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                                        .addComponent(jTextFieldRG, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                        .addComponent(jTextFieldCPF, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                        .addComponent(jComboBox1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                        .addComponent(jTextFieldDataNascimento, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                                    .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                        .addComponent(jTextField1Idade, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)))
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                                    .addComponent(jLabel3)
                                    .addComponent(jLabel4))))
                        .addGap(2, 2, 2)
                        .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(jTextFieldNumeroEndereco)
                            .addComponent(jTextFieldEndereco))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabel5, javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(jLabel6)))
                    .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                        .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jTextFieldNome, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jTextFieldDataCadastro, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(12, 12, 12)
                        .addComponent(jLabelFoto)))
                .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                        .addComponent(jTextFieldBairro, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addComponent(jTextFieldCidade, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanelInsertClientLayout.createSequentialGroup()
                        .addGap(54, 54, 54)
                        .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel17)
                            .addComponent(jLabel10)
                            .addComponent(jLabel16))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanelInsertClientLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jTextFieldTelefone, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jTextFieldOcupacao, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jTextFieldProfissao, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(jLabel11)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jTextFieldEmail, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap(87, Short.MAX_VALUE))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addComponent(jPanelInsertClient, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(0, 0, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanelInsertClient, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jTextFieldCidadeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jTextFieldCidadeActionPerformed
        // TODO addConsulta your handling code here:
    }//GEN-LAST:event_jTextFieldCidadeActionPerformed

    private void jTextField1IdadeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jTextField1IdadeActionPerformed
        // TODO addConsulta your handling code here:
    }//GEN-LAST:event_jTextField1IdadeActionPerformed


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JComboBox jComboBox1;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel10;
    private javax.swing.JLabel jLabel11;
    private javax.swing.JLabel jLabel12;
    private javax.swing.JLabel jLabel14;
    private javax.swing.JLabel jLabel15;
    private javax.swing.JLabel jLabel16;
    private javax.swing.JLabel jLabel17;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JLabel jLabel9;
    private javax.swing.JLabel jLabelFoto;
    private javax.swing.JPanel jPanelInsertClient;
    private javax.swing.JTextField jTextField1Idade;
    private javax.swing.JTextField jTextFieldBairro;
    private javax.swing.JTextField jTextFieldCPF;
    private javax.swing.JTextField jTextFieldCidade;
    private javax.swing.JTextField jTextFieldCodigo;
    private javax.swing.JTextField jTextFieldDataCadastro;
    private org.jdesktop.swingx.JXDatePicker jTextFieldDataNascimento;
    private javax.swing.JTextField jTextFieldEmail;
    private javax.swing.JTextField jTextFieldEndereco;
    private javax.swing.JTextField jTextFieldNome;
    private javax.swing.JTextField jTextFieldNumeroEndereco;
    private javax.swing.JTextField jTextFieldOcupacao;
    private javax.swing.JTextField jTextFieldProfissao;
    private javax.swing.JTextField jTextFieldRG;
    private javax.swing.JTextField jTextFieldTelefone;
    // End of variables declaration//GEN-END:variables

    public Cliente getDadosFrameClient() throws ParseException {
        Cliente client = new Cliente();
        client.setIdCliente(Integer.parseInt(this.jTextFieldCodigo.getText()));
        client.setNome(this.jTextFieldNome.getText());
        client.setBairro(this.jTextFieldBairro.getText());
        client.setCidade(this.jTextFieldCidade.getText());
        client.setEmail(this.jTextFieldEmail.getText());
        client.setEndereco(this.jTextFieldEndereco.getText());
        client.setNumeroEndereco(this.jTextFieldNumeroEndereco.getText());
        client.setTelefone(this.jTextFieldTelefone.getText());
        client.setNumeroCPF(this.jTextFieldCPF.getText());
        client.setNumeroRG(this.jTextFieldRG.getText());
        SimpleDateFormat data = new SimpleDateFormat("dd/MM/yyyy");
        client.setDataNascimento((java.util.Date) this.jTextFieldDataNascimento.getDate());
        client.setDataCadastro((java.util.Date) data.parse(this.jTextFieldDataCadastro.getText()));
        client.setSexo(this.jComboBox1.getSelectedItem().toString());
        client.setProfissao(this.jTextFieldProfissao.getText());
        client.setOcupacao(this.jTextFieldOcupacao.getText());
        return client;
    }
}
