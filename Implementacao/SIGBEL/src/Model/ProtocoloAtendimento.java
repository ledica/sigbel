/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Model;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author leticia
 */
@Entity
@Table(name = "ProtocoloAtendimento")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "ProtocoloAtendimento.findAll", query = "SELECT p FROM ProtocoloAtendimento p"),
    @NamedQuery(name = "ProtocoloAtendimento.findByIdProtocoloAtendimento", query = "SELECT p FROM ProtocoloAtendimento p WHERE p.idProtocoloAtendimento = :idProtocoloAtendimento")})
public class ProtocoloAtendimento implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "idProtocoloAtendimento")
    private Integer idProtocoloAtendimento;
    @JoinColumn(name = "idRegiaoGordura", referencedColumnName = "idRegiaoGordura")
    @ManyToOne(optional = false)
    private RegiaoGorduraLocalizada idRegiaoGordura;
    @JoinColumn(name = "idProtocolo", referencedColumnName = "idProtocolo")
    @ManyToOne(optional = false)
    private Protocolo idProtocolo;
    @JoinColumn(name = "idConsulta", referencedColumnName = "idConsulta")
    @ManyToOne(optional = false)
    private Atendimento idConsulta;

    public ProtocoloAtendimento() {
    }

    public ProtocoloAtendimento(Integer idProtocoloAtendimento) {
        this.idProtocoloAtendimento = idProtocoloAtendimento;
    }

    public Integer getIdProtocoloAtendimento() {
        return idProtocoloAtendimento;
    }

    public void setIdProtocoloAtendimento(Integer idProtocoloAtendimento) {
        this.idProtocoloAtendimento = idProtocoloAtendimento;
    }

    public RegiaoGorduraLocalizada getIdRegiaoGordura() {
        return idRegiaoGordura;
    }

    public void setIdRegiaoGordura(RegiaoGorduraLocalizada idRegiaoGordura) {
        this.idRegiaoGordura = idRegiaoGordura;
    }

    public Protocolo getIdProtocolo() {
        return idProtocolo;
    }

    public void setIdProtocolo(Protocolo idProtocolo) {
        this.idProtocolo = idProtocolo;
    }

    public Atendimento getIdConsulta() {
        return idConsulta;
    }

    public void setIdConsulta(Atendimento idConsulta) {
        this.idConsulta = idConsulta;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (idProtocoloAtendimento != null ? idProtocoloAtendimento.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof ProtocoloAtendimento)) {
            return false;
        }
        ProtocoloAtendimento other = (ProtocoloAtendimento) object;
        if ((this.idProtocoloAtendimento == null && other.idProtocoloAtendimento != null) || (this.idProtocoloAtendimento != null && !this.idProtocoloAtendimento.equals(other.idProtocoloAtendimento))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "dominio.ProtocoloAtendimento[ idProtocoloAtendimento=" + idProtocoloAtendimento + " ]";
    }
    
}
