package Model;

import java.awt.Image;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Collection;
import java.util.Date;
import java.util.GregorianCalendar;

public class Cliente {

    private int idCliente;
    private String nome;
    private String numeroCPF;
    private String numeroRG;
    private Date dataNascimento;
    private String endereco;
    private String numeroEndereco;
    private String bairro;
    private String cidade;
    private String telefone;
    private String email;
    private Date dataCadastro;
    private String sexo;
    private String ocupacao;
    private String profissao;
    private Image foto;
    private String fotografiaCliente;
    private Perfil perfil;
    private Collection<Pagamento> pagamento;
    private Collection<Consulta> consulta=new ArrayList<Consulta>();

    public Cliente() {
        idCliente = 0;
        nome = null;
        numeroCPF = null;
        numeroRG = null;
        dataNascimento = null;
        endereco = null;
        numeroEndereco = null;
        bairro = null;
        cidade = null;
        telefone = null;
        email = null;
        dataCadastro = null;
    }

    public Cliente(String nome, String telefone) {
        this.nome = nome;
        this.telefone = telefone;
        this.dataCadastro = new Date();
    }

    public Cliente(String nome, String numeroCPF, String numeroRG, Date dataNascimento, String endereco, String numeroEndereco, String bairro, String cidade, String telefone, String email) {
        this.nome = nome;
        this.numeroCPF = numeroCPF;
        this.numeroRG = numeroRG;
        this.dataNascimento = dataNascimento;
        this.endereco = endereco;
        this.numeroEndereco = numeroEndereco;
        this.bairro = bairro;
        this.cidade = cidade;
        this.telefone = telefone;
        this.email = email;
        this.dataCadastro = new Date();
    }

    public Cliente(int idCliente, String nome, String numeroCPF, String numeroRG, Date dataNascimento, String endereco, String numeroEndereco, String bairro, String cidade, String telefone, String email, Date dataCadastro) {
        this.idCliente = idCliente;
        this.nome = nome;
        this.numeroCPF = numeroCPF;
        this.numeroRG = numeroRG;
        this.dataNascimento = dataNascimento;
        this.endereco = endereco;
        this.numeroEndereco = numeroEndereco;
        this.bairro = bairro;
        this.cidade = cidade;
        this.telefone = telefone;
        this.email = email;
        this.dataCadastro = dataCadastro;
    }

    public int getIdCliente() {
        return idCliente;
    }

    public void setIdCliente(int idCliente) {
        this.idCliente = idCliente;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getNumeroCPF() {
        return numeroCPF;
    }

    public void setNumeroCPF(String numeroCPF) {
        this.numeroCPF = numeroCPF;
    }

    public String getNumeroRG() {
        return numeroRG;
    }

    public void setNumeroRG(String numeroRG) {
        this.numeroRG = numeroRG;
    }

    public Date getDataNascimento() {
        return dataNascimento;
    }

    public void setDataNascimento(Date dataNascimento) {
        this.dataNascimento = dataNascimento;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public String getNumeroEndereco() {
        return numeroEndereco;
    }

    public void setNumeroEndereco(String numeroEndereco) {
        this.numeroEndereco = numeroEndereco;
    }

    public String getBairro() {
        return bairro;
    }

    public void setBairro(String bairro) {
        this.bairro = bairro;
    }

    public String getCidade() {
        return cidade;
    }

    public void setCidade(String cidade) {
        this.cidade = cidade;
    }

    public String getTelefone() {
        return telefone;
    }

    public void setTelefone(String telefone) {
        this.telefone = telefone;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public Date getDataCadastro() {
        return dataCadastro;
    }

    public void setSexo(String sexo) {
        this.sexo = sexo;
    }

    public void setOcupacao(String ocupacao) {
        this.ocupacao = ocupacao;
    }

    public void setProfissao(String profissao) {
        this.profissao = profissao;
    }

    public int getIdade() {

        Calendar dateOfBirth = new GregorianCalendar();

        dateOfBirth.setTime(this.dataNascimento);

// Cria um objeto calendar com a data atual
        Calendar today = Calendar.getInstance();

// Obtém a idade baseado no ano
        int age = today.get(Calendar.YEAR) - dateOfBirth.get(Calendar.YEAR);

        dateOfBirth.add(Calendar.YEAR, age);

//se a data de hoje é antes da data de Nascimento, então diminui 1(um)
        if (today.before(dateOfBirth)) {

            age--;

        }

        return age;

    }

    public void setDataCadastro(Date dataCadastro) {
        this.dataCadastro = dataCadastro;
    }

    public Image getFoto() {
        return foto;
    }

    public String getSexo() {
        return sexo;
    }

    public String getOcupacao() {
        return ocupacao;
    }

    public String getProfissao() {
        return profissao;
    }

    public String getFotografiaCliente() {
        return fotografiaCliente;
    }

    public Perfil getPerfil() {
        return perfil;
    }

    public Collection<Pagamento> getPagamento() {
        return pagamento;
    }

    public Collection<Consulta> getConsulta() {
        return consulta;
    }

    public boolean addConsulta(Consulta e) {
        return consulta.add(e);
    }
    
}
