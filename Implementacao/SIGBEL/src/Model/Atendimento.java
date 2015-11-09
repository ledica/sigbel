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
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
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
 * @author leticia
 */
@Entity
@Table(name = "Atendimento")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Atendimento.findAll", query = "SELECT a FROM Atendimento a"),
    @NamedQuery(name = "Atendimento.findByIdAtendimento", query = "SELECT a FROM Atendimento a WHERE a.idAtendimento = :idAtendimento"),
    @NamedQuery(name = "Atendimento.findByApendiceXifoide", query = "SELECT a FROM Atendimento a WHERE a.apendiceXifoide = :apendiceXifoide"),
    @NamedQuery(name = "Atendimento.findByAnguloDeTales", query = "SELECT a FROM Atendimento a WHERE a.anguloDeTales = :anguloDeTales"),
    @NamedQuery(name = "Atendimento.findByAbdomeInferior", query = "SELECT a FROM Atendimento a WHERE a.abdomeInferior = :abdomeInferior"),
    @NamedQuery(name = "Atendimento.findByPeso", query = "SELECT a FROM Atendimento a WHERE a.peso = :peso"),
    @NamedQuery(name = "Atendimento.findByAxilar", query = "SELECT a FROM Atendimento a WHERE a.axilar = :axilar"),
    @NamedQuery(name = "Atendimento.findByBracoDireito10cm", query = "SELECT a FROM Atendimento a WHERE a.bracoDireito10cm = :bracoDireito10cm"),
    @NamedQuery(name = "Atendimento.findByBracoDireito20cm", query = "SELECT a FROM Atendimento a WHERE a.bracoDireito20cm = :bracoDireito20cm"),
    @NamedQuery(name = "Atendimento.findByBracoEsquerdo10cm", query = "SELECT a FROM Atendimento a WHERE a.bracoEsquerdo10cm = :bracoEsquerdo10cm"),
    @NamedQuery(name = "Atendimento.findByBracoEsquerdo20cm", query = "SELECT a FROM Atendimento a WHERE a.bracoEsquerdo20cm = :bracoEsquerdo20cm"),
    @NamedQuery(name = "Atendimento.findByCoxaDireita10cm", query = "SELECT a FROM Atendimento a WHERE a.coxaDireita10cm = :coxaDireita10cm"),
    @NamedQuery(name = "Atendimento.findByCoxaDireita20cm", query = "SELECT a FROM Atendimento a WHERE a.coxaDireita20cm = :coxaDireita20cm"),
    @NamedQuery(name = "Atendimento.findByCoxaDireita30cm", query = "SELECT a FROM Atendimento a WHERE a.coxaDireita30cm = :coxaDireita30cm"),
    @NamedQuery(name = "Atendimento.findByCoxaEsquerda10cm", query = "SELECT a FROM Atendimento a WHERE a.coxaEsquerda10cm = :coxaEsquerda10cm"),
    @NamedQuery(name = "Atendimento.findByCoxaEsquerda20cm", query = "SELECT a FROM Atendimento a WHERE a.coxaEsquerda20cm = :coxaEsquerda20cm"),
    @NamedQuery(name = "Atendimento.findByCoxaEsquerda30cm", query = "SELECT a FROM Atendimento a WHERE a.coxaEsquerda30cm = :coxaEsquerda30cm"),
    @NamedQuery(name = "Atendimento.findByPernaDireita10cm", query = "SELECT a FROM Atendimento a WHERE a.pernaDireita10cm = :pernaDireita10cm"),
    @NamedQuery(name = "Atendimento.findByPernaDireita20cm", query = "SELECT a FROM Atendimento a WHERE a.pernaDireita20cm = :pernaDireita20cm"),
    @NamedQuery(name = "Atendimento.findByPernaEsquerda20cm", query = "SELECT a FROM Atendimento a WHERE a.pernaEsquerda20cm = :pernaEsquerda20cm"),
    @NamedQuery(name = "Atendimento.findByDataAtendimento", query = "SELECT a FROM Atendimento a WHERE a.dataAtendimento = :dataAtendimento")})
public class Atendimento implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "idAtendimento")
    private Integer idAtendimento;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "apendiceXifoide")
    private Float apendiceXifoide;
    @Column(name = "anguloDeTales")
    private Float anguloDeTales;
    @Column(name = "abdomeInferior")
    private Float abdomeInferior;
    @Column(name = "peso")
    private Float peso;
    @Column(name = "axilar")
    private Float axilar;
    @Column(name = "bracoDireito10cm")
    private Float bracoDireito10cm;
    @Column(name = "bracoDireito20cm")
    private Float bracoDireito20cm;
    @Column(name = "bracoEsquerdo10cm")
    private Float bracoEsquerdo10cm;
    @Column(name = "bracoEsquerdo20cm")
    private Float bracoEsquerdo20cm;
    @Column(name = "coxaDireita10cm")
    private Float coxaDireita10cm;
    @Column(name = "coxaDireita20cm")
    private Float coxaDireita20cm;
    @Column(name = "coxaDireita30cm")
    private Float coxaDireita30cm;
    @Column(name = "coxaEsquerda10cm")
    private Float coxaEsquerda10cm;
    @Column(name = "coxaEsquerda20cm")
    private Float coxaEsquerda20cm;
    @Column(name = "coxaEsquerda30cm")
    private Float coxaEsquerda30cm;
    @Column(name = "pernaDireita10cm")
    private Float pernaDireita10cm;
    @Column(name = "pernaDireita20cm")
    private Float pernaDireita20cm;
    @Column(name = "pernaEsquerda20cm")
    private Float pernaEsquerda20cm;
    @Column(name = "dataAtendimento")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dataAtendimento;
    @JoinColumn(name = "idConsulta", referencedColumnName = "idConsulta")
    @ManyToOne(optional = false)
    private Consulta idConsulta;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "idConsulta")
    private Collection<ProtocoloAtendimento> protocoloAtendimentoCollection;

    public Atendimento() {
    }

    public Atendimento(Integer idAtendimento, Float apendiceXifoide, Float anguloDeTales, Float abdomeInferior, Float peso, Float axilar, Float bracoDireito10cm, Float bracoDireito20cm, Float bracoEsquerdo10cm, Float bracoEsquerdo20cm, Float coxaDireita10cm, Float coxaDireita20cm, Float coxaDireita30cm, Float coxaEsquerda10cm, Float coxaEsquerda20cm, Float coxaEsquerda30cm, Float pernaDireita10cm, Float pernaDireita20cm, Float pernaEsquerda20cm, Consulta idConsulta) {
        this.idAtendimento = idAtendimento;
        this.apendiceXifoide = apendiceXifoide;
        this.anguloDeTales = anguloDeTales;
        this.abdomeInferior = abdomeInferior;
        this.peso = peso;
        this.axilar = axilar;
        this.bracoDireito10cm = bracoDireito10cm;
        this.bracoDireito20cm = bracoDireito20cm;
        this.bracoEsquerdo10cm = bracoEsquerdo10cm;
        this.bracoEsquerdo20cm = bracoEsquerdo20cm;
        this.coxaDireita10cm = coxaDireita10cm;
        this.coxaDireita20cm = coxaDireita20cm;
        this.coxaDireita30cm = coxaDireita30cm;
        this.coxaEsquerda10cm = coxaEsquerda10cm;
        this.coxaEsquerda20cm = coxaEsquerda20cm;
        this.coxaEsquerda30cm = coxaEsquerda30cm;
        this.pernaDireita10cm = pernaDireita10cm;
        this.pernaDireita20cm = pernaDireita20cm;
        this.pernaEsquerda20cm = pernaEsquerda20cm;
        this.idConsulta = idConsulta;
    }

   
    

    public Atendimento(Integer idAtendimento) {
        this.idAtendimento = idAtendimento;
    }

    public Integer getIdAtendimento() {
        return idAtendimento;
    }

    public void setIdAtendimento(Integer idAtendimento) {
        this.idAtendimento = idAtendimento;
    }

    public Float getApendiceXifoide() {
        return apendiceXifoide;
    }

    public void setApendiceXifoide(Float apendiceXifoide) {
        this.apendiceXifoide = apendiceXifoide;
    }

    public Float getAnguloDeTales() {
        return anguloDeTales;
    }

    public void setAnguloDeTales(Float anguloDeTales) {
        this.anguloDeTales = anguloDeTales;
    }

    public Float getAbdomeInferior() {
        return abdomeInferior;
    }

    public void setAbdomeInferior(Float abdomeInferior) {
        this.abdomeInferior = abdomeInferior;
    }

    public Float getPeso() {
        return peso;
    }

    public void setPeso(Float peso) {
        this.peso = peso;
    }

    public Float getAxilar() {
        return axilar;
    }

    public void setAxilar(Float axilar) {
        this.axilar = axilar;
    }

    public Float getBracoDireito10cm() {
        return bracoDireito10cm;
    }

    public void setBracoDireito10cm(Float bracoDireito10cm) {
        this.bracoDireito10cm = bracoDireito10cm;
    }

    public Float getBracoDireito20cm() {
        return bracoDireito20cm;
    }

    public void setBracoDireito20cm(Float bracoDireito20cm) {
        this.bracoDireito20cm = bracoDireito20cm;
    }

    public Float getBracoEsquerdo10cm() {
        return bracoEsquerdo10cm;
    }

    public void setBracoEsquerdo10cm(Float bracoEsquerdo10cm) {
        this.bracoEsquerdo10cm = bracoEsquerdo10cm;
    }

    public Float getBracoEsquerdo20cm() {
        return bracoEsquerdo20cm;
    }

    public void setBracoEsquerdo20cm(Float bracoEsquerdo20cm) {
        this.bracoEsquerdo20cm = bracoEsquerdo20cm;
    }

    public Float getCoxaDireita10cm() {
        return coxaDireita10cm;
    }

    public void setCoxaDireita10cm(Float coxaDireita10cm) {
        this.coxaDireita10cm = coxaDireita10cm;
    }

    public Float getCoxaDireita20cm() {
        return coxaDireita20cm;
    }

    public void setCoxaDireita20cm(Float coxaDireita20cm) {
        this.coxaDireita20cm = coxaDireita20cm;
    }

    public Float getCoxaDireita30cm() {
        return coxaDireita30cm;
    }

    public void setCoxaDireita30cm(Float coxaDireita30cm) {
        this.coxaDireita30cm = coxaDireita30cm;
    }

    public Float getCoxaEsquerda10cm() {
        return coxaEsquerda10cm;
    }

    public void setCoxaEsquerda10cm(Float coxaEsquerda10cm) {
        this.coxaEsquerda10cm = coxaEsquerda10cm;
    }

    public Float getCoxaEsquerda20cm() {
        return coxaEsquerda20cm;
    }

    public void setCoxaEsquerda20cm(Float coxaEsquerda20cm) {
        this.coxaEsquerda20cm = coxaEsquerda20cm;
    }

    public Float getCoxaEsquerda30cm() {
        return coxaEsquerda30cm;
    }

    public void setCoxaEsquerda30cm(Float coxaEsquerda30cm) {
        this.coxaEsquerda30cm = coxaEsquerda30cm;
    }

    public Float getPernaDireita10cm() {
        return pernaDireita10cm;
    }

    public void setPernaDireita10cm(Float pernaDireita10cm) {
        this.pernaDireita10cm = pernaDireita10cm;
    }

    public Float getPernaDireita20cm() {
        return pernaDireita20cm;
    }

    public void setPernaDireita20cm(Float pernaDireita20cm) {
        this.pernaDireita20cm = pernaDireita20cm;
    }

    public Float getPernaEsquerda20cm() {
        return pernaEsquerda20cm;
    }

    public void setPernaEsquerda20cm(Float pernaEsquerda20cm) {
        this.pernaEsquerda20cm = pernaEsquerda20cm;
    }

    public Date getDataAtendimento() {
        return dataAtendimento;
    }

    public void setDataAtendimento(Date dataAtendimento) {
        this.dataAtendimento = dataAtendimento;
    }

    public Consulta getIdConsulta() {
        return idConsulta;
    }

    public void setIdConsulta(Consulta idConsulta) {
        this.idConsulta = idConsulta;
    }

    @XmlTransient
    public Collection<ProtocoloAtendimento> getProtocoloAtendimentoCollection() {
        return protocoloAtendimentoCollection;
    }

    public void setProtocoloAtendimentoCollection(Collection<ProtocoloAtendimento> protocoloAtendimentoCollection) {
        this.protocoloAtendimentoCollection = protocoloAtendimentoCollection;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (idAtendimento != null ? idAtendimento.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Atendimento)) {
            return false;
        }
        Atendimento other = (Atendimento) object;
        if ((this.idAtendimento == null && other.idAtendimento != null) || (this.idAtendimento != null && !this.idAtendimento.equals(other.idAtendimento))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "dominio.Atendimento[ idAtendimento=" + idAtendimento + " ]";
    }
    
}
