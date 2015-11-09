/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Model;

import java.io.Serializable;
import java.util.Date;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author leticia
 */
@Entity
@Table(name = "Cirurgia")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Cirurgia.findAll", query = "SELECT c FROM Cirurgia c"),
    @NamedQuery(name = "Cirurgia.findByIdDadoComplementar", query = "SELECT c FROM Cirurgia c WHERE c.idDadoComplementar = :idDadoComplementar"),
    @NamedQuery(name = "Cirurgia.findByDescricaoDadoComplementar", query = "SELECT c FROM Cirurgia c WHERE c.descricaoDadoComplementar = :descricaoDadoComplementar"),
    @NamedQuery(name = "Cirurgia.findByTipoDadoComplementar", query = "SELECT c FROM Cirurgia c WHERE c.tipoDadoComplementar = :tipoDadoComplementar"),
    @NamedQuery(name = "Cirurgia.findByTempoCirurgia", query = "SELECT c FROM Cirurgia c WHERE c.tempoCirurgia = :tempoCirurgia")})
public class Cirurgia implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "idDadoComplementar")
    private Integer idDadoComplementar;
    @Column(name = "descricaoDadoComplementar")
    private String descricaoDadoComplementar;
    @Column(name = "tipoDadoComplementar")
    private Integer tipoDadoComplementar;
    @Column(name = "tempoCirurgia")
    @Temporal(TemporalType.TIMESTAMP)
    private Date tempoCirurgia;
    @JoinColumn(name = "idCliente", referencedColumnName = "idCliente")
    @ManyToOne(optional = false)
    private Cliente idCliente;

    public Cirurgia() {
    }

    public Cirurgia(Integer idDadoComplementar) {
        this.idDadoComplementar = idDadoComplementar;
    }

    public Integer getIdDadoComplementar() {
        return idDadoComplementar;
    }

    public void setIdDadoComplementar(Integer idDadoComplementar) {
        this.idDadoComplementar = idDadoComplementar;
    }

    public String getDescricaoDadoComplementar() {
        return descricaoDadoComplementar;
    }

    public void setDescricaoDadoComplementar(String descricaoDadoComplementar) {
        this.descricaoDadoComplementar = descricaoDadoComplementar;
    }

    public Integer getTipoDadoComplementar() {
        return tipoDadoComplementar;
    }

    public void setTipoDadoComplementar(Integer tipoDadoComplementar) {
        this.tipoDadoComplementar = tipoDadoComplementar;
    }

    public Date getTempoCirurgia() {
        return tempoCirurgia;
    }

    public void setTempoCirurgia(Date tempoCirurgia) {
        this.tempoCirurgia = tempoCirurgia;
    }

    public Cliente getIdCliente() {
        return idCliente;
    }

    public void setIdCliente(Cliente idCliente) {
        this.idCliente = idCliente;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (idDadoComplementar != null ? idDadoComplementar.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Cirurgia)) {
            return false;
        }
        Cirurgia other = (Cirurgia) object;
        if ((this.idDadoComplementar == null && other.idDadoComplementar != null) || (this.idDadoComplementar != null && !this.idDadoComplementar.equals(other.idDadoComplementar))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "dominio.Cirurgia[ idDadoComplementar=" + idDadoComplementar + " ]";
    }
    
}
