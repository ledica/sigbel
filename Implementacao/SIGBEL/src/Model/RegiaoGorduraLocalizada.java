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
@Table(name = "RegiaoGorduraLocalizada")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "RegiaoGorduraLocalizada.findAll", query = "SELECT r FROM RegiaoGorduraLocalizada r"),
    @NamedQuery(name = "RegiaoGorduraLocalizada.findByIdRegiaoGordura", query = "SELECT r FROM RegiaoGorduraLocalizada r WHERE r.idRegiaoGordura = :idRegiaoGordura"),
    @NamedQuery(name = "RegiaoGorduraLocalizada.findByDescricaoRegiao", query = "SELECT r FROM RegiaoGorduraLocalizada r WHERE r.descricaoRegiao = :descricaoRegiao")})
public class RegiaoGorduraLocalizada implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "idRegiaoGordura")
    private Integer idRegiaoGordura;
    @Column(name = "descricaoRegiao")
    private String descricaoRegiao;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "idRegiaoGordura")
    private Collection<ProtocoloAtendimento> protocoloAtendimentoCollection;

    public RegiaoGorduraLocalizada() {
    }

    public RegiaoGorduraLocalizada(Integer idRegiaoGordura) {
        this.idRegiaoGordura = idRegiaoGordura;
    }

    public Integer getIdRegiaoGordura() {
        return idRegiaoGordura;
    }

    public void setIdRegiaoGordura(Integer idRegiaoGordura) {
        this.idRegiaoGordura = idRegiaoGordura;
    }

    public String getDescricaoRegiao() {
        return descricaoRegiao;
    }

    public void setDescricaoRegiao(String descricaoRegiao) {
        this.descricaoRegiao = descricaoRegiao;
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
        hash += (idRegiaoGordura != null ? idRegiaoGordura.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof RegiaoGorduraLocalizada)) {
            return false;
        }
        RegiaoGorduraLocalizada other = (RegiaoGorduraLocalizada) object;
        if ((this.idRegiaoGordura == null && other.idRegiaoGordura != null) || (this.idRegiaoGordura != null && !this.idRegiaoGordura.equals(other.idRegiaoGordura))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "dominio.RegiaoGorduraLocalizada[ idRegiaoGordura=" + idRegiaoGordura + " ]";
    }
    
}
