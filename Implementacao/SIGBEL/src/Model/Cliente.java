/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Model;

import java.io.Serializable;
import java.util.Collection;
import java.util.Date;
import javax.persistence.Basic;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Lob;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;

/**
 *
 * @author root
 */
@Entity
@Table(name = "Cliente")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Cliente.findAll", query = "SELECT c FROM Cliente c"),
    @NamedQuery(name = "Cliente.findByIdCliente", query = "SELECT c FROM Cliente c WHERE c.idCliente = :idCliente"),
    @NamedQuery(name = "Cliente.findByNomeCliente", query = "SELECT c FROM Cliente c WHERE c.nomeCliente = :nomeCliente"),
    @NamedQuery(name = "Cliente.findByNumeroCPF", query = "SELECT c FROM Cliente c WHERE c.numeroCPF = :numeroCPF"),
    @NamedQuery(name = "Cliente.findByNumeroRG", query = "SELECT c FROM Cliente c WHERE c.numeroRG = :numeroRG"),
    @NamedQuery(name = "Cliente.findByEndereco", query = "SELECT c FROM Cliente c WHERE c.endereco = :endereco"),
    @NamedQuery(name = "Cliente.findByBairro", query = "SELECT c FROM Cliente c WHERE c.bairro = :bairro"),
    @NamedQuery(name = "Cliente.findByCidade", query = "SELECT c FROM Cliente c WHERE c.cidade = :cidade"),
    @NamedQuery(name = "Cliente.findByNumeroEndereco", query = "SELECT c FROM Cliente c WHERE c.numeroEndereco = :numeroEndereco"),
    @NamedQuery(name = "Cliente.findByTelefone", query = "SELECT c FROM Cliente c WHERE c.telefone = :telefone"),
    @NamedQuery(name = "Cliente.findByEmail", query = "SELECT c FROM Cliente c WHERE c.email = :email"),
    @NamedQuery(name = "Cliente.findByDataNascimento", query = "SELECT c FROM Cliente c WHERE c.dataNascimento = :dataNascimento"),
    @NamedQuery(name = "Cliente.findByDataCadastro", query = "SELECT c FROM Cliente c WHERE c.dataCadastro = :dataCadastro"),
    @NamedQuery(name = "Cliente.findBySexo", query = "SELECT c FROM Cliente c WHERE c.sexo = :sexo"),
    @NamedQuery(name = "Cliente.findByEstadoCivil", query = "SELECT c FROM Cliente c WHERE c.estadoCivil = :estadoCivil"),
    @NamedQuery(name = "Cliente.findByProfissao", query = "SELECT c FROM Cliente c WHERE c.profissao = :profissao"),
    @NamedQuery(name = "Cliente.findByOcupacao", query = "SELECT c FROM Cliente c WHERE c.ocupacao = :ocupacao"),
    @NamedQuery(name = "Cliente.findByFotogorafia", query = "SELECT c FROM Cliente c WHERE c.fotogorafia = :fotogorafia"),
    @NamedQuery(name = "Cliente.findByCancer", query = "SELECT c FROM Cliente c WHERE c.cancer = :cancer"),
    @NamedQuery(name = "Cliente.findByTipoCancer", query = "SELECT c FROM Cliente c WHERE c.tipoCancer = :tipoCancer"),
    @NamedQuery(name = "Cliente.findByFamiliarComCancer", query = "SELECT c FROM Cliente c WHERE c.familiarComCancer = :familiarComCancer"),
    @NamedQuery(name = "Cliente.findByProblemaHepatico", query = "SELECT c FROM Cliente c WHERE c.problemaHepatico = :problemaHepatico"),
    @NamedQuery(name = "Cliente.findByVarizes", query = "SELECT c FROM Cliente c WHERE c.varizes = :varizes"),
    @NamedQuery(name = "Cliente.findByFragilidadeCapilar", query = "SELECT c FROM Cliente c WHERE c.fragilidadeCapilar = :fragilidadeCapilar"),
    @NamedQuery(name = "Cliente.findByProblemaCirculatorio", query = "SELECT c FROM Cliente c WHERE c.problemaCirculatorio = :problemaCirculatorio"),
    @NamedQuery(name = "Cliente.findByHipertensao", query = "SELECT c FROM Cliente c WHERE c.hipertensao = :hipertensao"),
    @NamedQuery(name = "Cliente.findByHipotensao", query = "SELECT c FROM Cliente c WHERE c.hipotensao = :hipotensao"),
    @NamedQuery(name = "Cliente.findByProblemaCardiaco", query = "SELECT c FROM Cliente c WHERE c.problemaCardiaco = :problemaCardiaco"),
    @NamedQuery(name = "Cliente.findByMarcaPasso", query = "SELECT c FROM Cliente c WHERE c.marcaPasso = :marcaPasso"),
    @NamedQuery(name = "Cliente.findByProteseMetalica", query = "SELECT c FROM Cliente c WHERE c.proteseMetalica = :proteseMetalica"),
    @NamedQuery(name = "Cliente.findByDisturbioTireoide", query = "SELECT c FROM Cliente c WHERE c.disturbioTireoide = :disturbioTireoide"),
    @NamedQuery(name = "Cliente.findByDiabete", query = "SELECT c FROM Cliente c WHERE c.diabete = :diabete"),
    @NamedQuery(name = "Cliente.findByMenstruacao", query = "SELECT c FROM Cliente c WHERE c.menstruacao = :menstruacao"),
    @NamedQuery(name = "Cliente.findByReposicaoHormonal", query = "SELECT c FROM Cliente c WHERE c.reposicaoHormonal = :reposicaoHormonal"),
    @NamedQuery(name = "Cliente.findByTpm", query = "SELECT c FROM Cliente c WHERE c.tpm = :tpm"),
    @NamedQuery(name = "Cliente.findByDiu", query = "SELECT c FROM Cliente c WHERE c.diu = :diu"),
    @NamedQuery(name = "Cliente.findByAnticoncepcional", query = "SELECT c FROM Cliente c WHERE c.anticoncepcional = :anticoncepcional"),
    @NamedQuery(name = "Cliente.findByDataInicioAnticoncepcional", query = "SELECT c FROM Cliente c WHERE c.dataInicioAnticoncepcional = :dataInicioAnticoncepcional"),
    @NamedQuery(name = "Cliente.findByQuantidadeGestacao", query = "SELECT c FROM Cliente c WHERE c.quantidadeGestacao = :quantidadeGestacao"),
    @NamedQuery(name = "Cliente.findByDataUltimaMenstruacao", query = "SELECT c FROM Cliente c WHERE c.dataUltimaMenstruacao = :dataUltimaMenstruacao"),
    @NamedQuery(name = "Cliente.findByDataUltimaGestacao", query = "SELECT c FROM Cliente c WHERE c.dataUltimaGestacao = :dataUltimaGestacao"),
    @NamedQuery(name = "Cliente.findByQuantidadeBebidaAlcoolica", query = "SELECT c FROM Cliente c WHERE c.quantidadeBebidaAlcoolica = :quantidadeBebidaAlcoolica"),
    @NamedQuery(name = "Cliente.findByDescricaoBebidaAlcoolica", query = "SELECT c FROM Cliente c WHERE c.descricaoBebidaAlcoolica = :descricaoBebidaAlcoolica"),
    @NamedQuery(name = "Cliente.findByQuantidadeAtividadeFisica", query = "SELECT c FROM Cliente c WHERE c.quantidadeAtividadeFisica = :quantidadeAtividadeFisica"),
    @NamedQuery(name = "Cliente.findByQuantidadeCigarro", query = "SELECT c FROM Cliente c WHERE c.quantidadeCigarro = :quantidadeCigarro"),
    @NamedQuery(name = "Cliente.findByQuantidadeIngestaoLiquido", query = "SELECT c FROM Cliente c WHERE c.quantidadeIngestaoLiquido = :quantidadeIngestaoLiquido"),
    @NamedQuery(name = "Cliente.findByPrisaoDeVentre", query = "SELECT c FROM Cliente c WHERE c.prisaoDeVentre = :prisaoDeVentre"),
    @NamedQuery(name = "Cliente.findByDificuldadeUrinar", query = "SELECT c FROM Cliente c WHERE c.dificuldadeUrinar = :dificuldadeUrinar"),
    @NamedQuery(name = "Cliente.findByUsaRoupaApertada", query = "SELECT c FROM Cliente c WHERE c.usaRoupaApertada = :usaRoupaApertada"),
    @NamedQuery(name = "Cliente.findByPosicaoDuranteTrabalho", query = "SELECT c FROM Cliente c WHERE c.posicaoDuranteTrabalho = :posicaoDuranteTrabalho")})
public class Cliente implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "idCliente")
    private Integer idCliente;
    @Basic(optional = false)
    @Column(name = "nomeCliente")
    private String nomeCliente;
    @Column(name = "numeroCPF")
    private String numeroCPF;
    @Column(name = "numeroRG")
    private String numeroRG;
    @Column(name = "endereco")
    private String endereco;
    @Column(name = "bairro")
    private String bairro;
    @Column(name = "cidade")
    private String cidade;
    @Column(name = "numeroEndereco")
    private String numeroEndereco;
    @Column(name = "telefone")
    private String telefone;
    @Column(name = "email")
    private String email;
    @Column(name = "dataNascimento")
    @Temporal(TemporalType.DATE)
    private Date dataNascimento;
    @Column(name = "dataCadastro")
    @Temporal(TemporalType.DATE)
    private Date dataCadastro;
    @Column(name = "sexo")
    private String sexo;
    @Column(name = "estadoCivil")
    private String estadoCivil;
    @Column(name = "profissao")
    private String profissao;
    @Column(name = "ocupacao")
    private String ocupacao;
    @Column(name = "fotogorafia")
    private String fotogorafia;
    @Lob
    @Column(name = "queixaPrincipal")
    private String queixaPrincipal;
    @Column(name = "cancer")
    private Boolean cancer;
    @Column(name = "tipoCancer")
    private String tipoCancer;
    @Column(name = "familiarComCancer")
    private String familiarComCancer;
    @Column(name = "problemaHepatico")
    private Boolean problemaHepatico;
    @Column(name = "varizes")
    private Boolean varizes;
    @Column(name = "fragilidadeCapilar")
    private Boolean fragilidadeCapilar;
    @Column(name = "problemaCirculatorio")
    private Boolean problemaCirculatorio;
    @Column(name = "hipertensao")
    private Boolean hipertensao;
    @Column(name = "hipotensao")
    private Boolean hipotensao;
    @Column(name = "problemaCardiaco")
    private Boolean problemaCardiaco;
    @Column(name = "marcaPasso")
    private Boolean marcaPasso;
    @Column(name = "proteseMetalica")
    private Boolean proteseMetalica;
    @Column(name = "disturbioTireoide")
    private Boolean disturbioTireoide;
    @Column(name = "diabete")
    private Boolean diabete;
    @Column(name = "menstruacao")
    private String menstruacao;
    @Column(name = "reposicaoHormonal")
    private Boolean reposicaoHormonal;
    @Column(name = "tpm")
    private Boolean tpm;
    @Column(name = "diu")
    private Boolean diu;
    @Column(name = "anticoncepcional")
    private Boolean anticoncepcional;
    @Column(name = "dataInicioAnticoncepcional")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dataInicioAnticoncepcional;
    @Column(name = "quantidadeGestacao")
    private Integer quantidadeGestacao;
    @Column(name = "dataUltimaMenstruacao")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dataUltimaMenstruacao;
    @Column(name = "dataUltimaGestacao")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dataUltimaGestacao;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "quantidadeBebidaAlcoolica")
    private Float quantidadeBebidaAlcoolica;
    @Column(name = "descricaoBebidaAlcoolica")
    private String descricaoBebidaAlcoolica;
    @Column(name = "quantidadeAtividadeFisica")
    private Integer quantidadeAtividadeFisica;
    @Column(name = "quantidadeCigarro")
    private Float quantidadeCigarro;
    @Column(name = "quantidadeIngestaoLiquido")
    private Float quantidadeIngestaoLiquido;
    @Column(name = "prisaoDeVentre")
    private Boolean prisaoDeVentre;
    @Column(name = "dificuldadeUrinar")
    private Boolean dificuldadeUrinar;
    @Column(name = "usaRoupaApertada")
    private Boolean usaRoupaApertada;
    @Column(name = "posicaoDuranteTrabalho")
    private String posicaoDuranteTrabalho;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "idCliente")
    private Collection<Alergia> alergiaCollection;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "idCliente")
    private Collection<Consulta> consultaCollection;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "idCliente")
    private Collection<Cirurgia> cirurgiaCollection;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "idCliente")
    private Collection<DadoComplementarPerfil> dadoComplementarPerfilCollection;

    public Cliente() {
    }

    public Cliente(Integer idCliente) {
        this.idCliente = idCliente;
    }

    public Cliente(Integer idCliente, String nomeCliente) {
        this.idCliente = idCliente;
        this.nomeCliente = nomeCliente;
    }

    public Integer getIdCliente() {
        return idCliente;
    }

    public void setIdCliente(Integer idCliente) {
        this.idCliente = idCliente;
    }

    public String getNomeCliente() {
        return nomeCliente;
    }

    public void setNomeCliente(String nomeCliente) {
        this.nomeCliente = nomeCliente;
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

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
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

    public String getNumeroEndereco() {
        return numeroEndereco;
    }

    public void setNumeroEndereco(String numeroEndereco) {
        this.numeroEndereco = numeroEndereco;
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

    public Date getDataNascimento() {
        return dataNascimento;
    }

    public void setDataNascimento(Date dataNascimento) {
        this.dataNascimento = dataNascimento;
    }

    public Date getDataCadastro() {
        return dataCadastro;
    }

    public void setDataCadastro(Date dataCadastro) {
        this.dataCadastro = dataCadastro;
    }

    public String getSexo() {
        return sexo;
    }

    public void setSexo(String sexo) {
        this.sexo = sexo;
    }

    public String getEstadoCivil() {
        return estadoCivil;
    }

    public void setEstadoCivil(String estadoCivil) {
        this.estadoCivil = estadoCivil;
    }

    public String getProfissao() {
        return profissao;
    }

    public void setProfissao(String profissao) {
        this.profissao = profissao;
    }

    public String getOcupacao() {
        return ocupacao;
    }

    public void setOcupacao(String ocupacao) {
        this.ocupacao = ocupacao;
    }

    public String getFotogorafia() {
        return fotogorafia;
    }

    public void setFotogorafia(String fotogorafia) {
        this.fotogorafia = fotogorafia;
    }

    public String getQueixaPrincipal() {
        return queixaPrincipal;
    }

    public void setQueixaPrincipal(String queixaPrincipal) {
        this.queixaPrincipal = queixaPrincipal;
    }

    public Boolean getCancer() {
        return cancer;
    }

    public void setCancer(Boolean cancer) {
        this.cancer = cancer;
    }

    public String getTipoCancer() {
        return tipoCancer;
    }

    public void setTipoCancer(String tipoCancer) {
        this.tipoCancer = tipoCancer;
    }

    public String getFamiliarComCancer() {
        return familiarComCancer;
    }

    public void setFamiliarComCancer(String familiarComCancer) {
        this.familiarComCancer = familiarComCancer;
    }

    public Boolean getProblemaHepatico() {
        return problemaHepatico;
    }

    public void setProblemaHepatico(Boolean problemaHepatico) {
        this.problemaHepatico = problemaHepatico;
    }

    public Boolean getVarizes() {
        return varizes;
    }

    public void setVarizes(Boolean varizes) {
        this.varizes = varizes;
    }

    public Boolean getFragilidadeCapilar() {
        return fragilidadeCapilar;
    }

    public void setFragilidadeCapilar(Boolean fragilidadeCapilar) {
        this.fragilidadeCapilar = fragilidadeCapilar;
    }

    public Boolean getProblemaCirculatorio() {
        return problemaCirculatorio;
    }

    public void setProblemaCirculatorio(Boolean problemaCirculatorio) {
        this.problemaCirculatorio = problemaCirculatorio;
    }

    public Boolean getHipertensao() {
        return hipertensao;
    }

    public void setHipertensao(Boolean hipertensao) {
        this.hipertensao = hipertensao;
    }

    public Boolean getHipotensao() {
        return hipotensao;
    }

    public void setHipotensao(Boolean hipotensao) {
        this.hipotensao = hipotensao;
    }

    public Boolean getProblemaCardiaco() {
        return problemaCardiaco;
    }

    public void setProblemaCardiaco(Boolean problemaCardiaco) {
        this.problemaCardiaco = problemaCardiaco;
    }

    public Boolean getMarcaPasso() {
        return marcaPasso;
    }

    public void setMarcaPasso(Boolean marcaPasso) {
        this.marcaPasso = marcaPasso;
    }

    public Boolean getProteseMetalica() {
        return proteseMetalica;
    }

    public void setProteseMetalica(Boolean proteseMetalica) {
        this.proteseMetalica = proteseMetalica;
    }

    public Boolean getDisturbioTireoide() {
        return disturbioTireoide;
    }

    public void setDisturbioTireoide(Boolean disturbioTireoide) {
        this.disturbioTireoide = disturbioTireoide;
    }

    public Boolean getDiabete() {
        return diabete;
    }

    public void setDiabete(Boolean diabete) {
        this.diabete = diabete;
    }

    public String getMenstruacao() {
        return menstruacao;
    }

    public void setMenstruacao(String menstruacao) {
        this.menstruacao = menstruacao;
    }

    public Boolean getReposicaoHormonal() {
        return reposicaoHormonal;
    }

    public void setReposicaoHormonal(Boolean reposicaoHormonal) {
        this.reposicaoHormonal = reposicaoHormonal;
    }

    public Boolean getTpm() {
        return tpm;
    }

    public void setTpm(Boolean tpm) {
        this.tpm = tpm;
    }

    public Boolean getDiu() {
        return diu;
    }

    public void setDiu(Boolean diu) {
        this.diu = diu;
    }

    public Boolean getAnticoncepcional() {
        return anticoncepcional;
    }

    public void setAnticoncepcional(Boolean anticoncepcional) {
        this.anticoncepcional = anticoncepcional;
    }

    public Date getDataInicioAnticoncepcional() {
        return dataInicioAnticoncepcional;
    }

    public void setDataInicioAnticoncepcional(Date dataInicioAnticoncepcional) {
        this.dataInicioAnticoncepcional = dataInicioAnticoncepcional;
    }

    public Integer getQuantidadeGestacao() {
        return quantidadeGestacao;
    }

    public void setQuantidadeGestacao(Integer quantidadeGestacao) {
        this.quantidadeGestacao = quantidadeGestacao;
    }

    public Date getDataUltimaMenstruacao() {
        return dataUltimaMenstruacao;
    }

    public void setDataUltimaMenstruacao(Date dataUltimaMenstruacao) {
        this.dataUltimaMenstruacao = dataUltimaMenstruacao;
    }

    public Date getDataUltimaGestacao() {
        return dataUltimaGestacao;
    }

    public void setDataUltimaGestacao(Date dataUltimaGestacao) {
        this.dataUltimaGestacao = dataUltimaGestacao;
    }

    public Float getQuantidadeBebidaAlcoolica() {
        return quantidadeBebidaAlcoolica;
    }

    public void setQuantidadeBebidaAlcoolica(Float quantidadeBebidaAlcoolica) {
        this.quantidadeBebidaAlcoolica = quantidadeBebidaAlcoolica;
    }

    public String getDescricaoBebidaAlcoolica() {
        return descricaoBebidaAlcoolica;
    }

    public void setDescricaoBebidaAlcoolica(String descricaoBebidaAlcoolica) {
        this.descricaoBebidaAlcoolica = descricaoBebidaAlcoolica;
    }

    public Integer getQuantidadeAtividadeFisica() {
        return quantidadeAtividadeFisica;
    }

    public void setQuantidadeAtividadeFisica(Integer quantidadeAtividadeFisica) {
        this.quantidadeAtividadeFisica = quantidadeAtividadeFisica;
    }

    public Float getQuantidadeCigarro() {
        return quantidadeCigarro;
    }

    public void setQuantidadeCigarro(Float quantidadeCigarro) {
        this.quantidadeCigarro = quantidadeCigarro;
    }

    public Float getQuantidadeIngestaoLiquido() {
        return quantidadeIngestaoLiquido;
    }

    public void setQuantidadeIngestaoLiquido(Float quantidadeIngestaoLiquido) {
        this.quantidadeIngestaoLiquido = quantidadeIngestaoLiquido;
    }

    public Boolean getPrisaoDeVentre() {
        return prisaoDeVentre;
    }

    public void setPrisaoDeVentre(Boolean prisaoDeVentre) {
        this.prisaoDeVentre = prisaoDeVentre;
    }

    public Boolean getDificuldadeUrinar() {
        return dificuldadeUrinar;
    }

    public void setDificuldadeUrinar(Boolean dificuldadeUrinar) {
        this.dificuldadeUrinar = dificuldadeUrinar;
    }

    public Boolean getUsaRoupaApertada() {
        return usaRoupaApertada;
    }

    public void setUsaRoupaApertada(Boolean usaRoupaApertada) {
        this.usaRoupaApertada = usaRoupaApertada;
    }

    public String getPosicaoDuranteTrabalho() {
        return posicaoDuranteTrabalho;
    }

    public void setPosicaoDuranteTrabalho(String posicaoDuranteTrabalho) {
        this.posicaoDuranteTrabalho = posicaoDuranteTrabalho;
    }

    @XmlTransient
    public Collection<Alergia> getAlergiaCollection() {
        return alergiaCollection;
    }

    public void setAlergiaCollection(Collection<Alergia> alergiaCollection) {
        this.alergiaCollection = alergiaCollection;
    }

    @XmlTransient
    public Collection<Consulta> getConsultaCollection() {
        return consultaCollection;
    }

    public void setConsultaCollection(Collection<Consulta> consultaCollection) {
        this.consultaCollection = consultaCollection;
    }

    @XmlTransient
    public Collection<Cirurgia> getCirurgiaCollection() {
        return cirurgiaCollection;
    }

    public void setCirurgiaCollection(Collection<Cirurgia> cirurgiaCollection) {
        this.cirurgiaCollection = cirurgiaCollection;
    }

    @XmlTransient
    public Collection<DadoComplementarPerfil> getDadoComplementarPerfilCollection() {
        return dadoComplementarPerfilCollection;
    }

    public void setDadoComplementarPerfilCollection(Collection<DadoComplementarPerfil> dadoComplementarPerfilCollection) {
        this.dadoComplementarPerfilCollection = dadoComplementarPerfilCollection;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (idCliente != null ? idCliente.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Cliente)) {
            return false;
        }
        Cliente other = (Cliente) object;
        if ((this.idCliente == null && other.idCliente != null) || (this.idCliente != null && !this.idCliente.equals(other.idCliente))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "Model.Cliente[ idCliente=" + idCliente + " ]";
    }

    public Cliente(Integer idCliente, String nomeCliente, String numeroCPF, String numeroRG, String endereco, String bairro, String cidade, String numeroEndereco, String telefone, String email, Date dataNascimento, Date dataCadastro) {
        this.idCliente = idCliente;
        this.nomeCliente = nomeCliente;
        this.numeroCPF = numeroCPF;
        this.numeroRG = numeroRG;
        this.endereco = endereco;
        this.bairro = bairro;
        this.cidade = cidade;
        this.numeroEndereco = numeroEndereco;
        this.telefone = telefone;
        this.email = email;
        this.dataNascimento = dataNascimento;
        this.dataCadastro = dataCadastro;
    }
    
}
