/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Model;

import java.io.Serializable;
import java.util.Collection;
import javax.persistence.Basic;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;

/**
 *
 * @author leticia
 */
@Entity
@Table(name = "Protocolo")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Protocolo.findAll", query = "SELECT p FROM Protocolo p"),
    @NamedQuery(name = "Protocolo.findByIdProtocolo", query = "SELECT p FROM Protocolo p WHERE p.idProtocolo = :idProtocolo"),
    @NamedQuery(name = "Protocolo.findByDescricaoProtocolo", query = "SELECT p FROM Protocolo p WHERE p.descricaoProtocolo = :descricaoProtocolo")})
public class Protocolo implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "idProtocolo")
    private Integer idProtocolo;
    @Column(name = "descricaoProtocolo")
    private String descricaoProtocolo;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "idProtocolo")
    private Collection<ProtocoloAtendimento> protocoloAtendimentoCollection;

    public Protocolo() {
    }

    public Protocolo(Integer idProtocolo) {
        this.idProtocolo = idProtocolo;
    }

    public Integer getIdProtocolo() {
        return idProtocolo;
    }

    public void setIdProtocolo(Integer idProtocolo) {
        this.idProtocolo = idProtocolo;
    }

    public String getDescricaoProtocolo() {
        return descricaoProtocolo;
    }

    public void setDescricaoProtocolo(String descricaoProtocolo) {
        this.descricaoProtocolo = descricaoProtocolo;
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
        hash += (idProtocolo != null ? idProtocolo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Protocolo)) {
            return false;
        }
        Protocolo other = (Protocolo) object;
        if ((this.idProtocolo == null && other.idProtocolo != null) || (this.idProtocolo != null && !this.idProtocolo.equals(other.idProtocolo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "dominio.Protocolo[ idProtocolo=" + idProtocolo + " ]";
    }
    
}
