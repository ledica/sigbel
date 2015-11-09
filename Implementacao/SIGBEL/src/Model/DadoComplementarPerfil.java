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
@Table(name = "DadoComplementarPerfil")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "DadoComplementarPerfil.findAll", query = "SELECT d FROM DadoComplementarPerfil d"),
    @NamedQuery(name = "DadoComplementarPerfil.findByIdDadoComplementarPerfil", query = "SELECT d FROM DadoComplementarPerfil d WHERE d.idDadoComplementarPerfil = :idDadoComplementarPerfil"),
    @NamedQuery(name = "DadoComplementarPerfil.findByDescricaoDadoComplementar", query = "SELECT d FROM DadoComplementarPerfil d WHERE d.descricaoDadoComplementar = :descricaoDadoComplementar"),
    @NamedQuery(name = "DadoComplementarPerfil.findByTipoDadoComplementar", query = "SELECT d FROM DadoComplementarPerfil d WHERE d.tipoDadoComplementar = :tipoDadoComplementar"),
    @NamedQuery(name = "DadoComplementarPerfil.findByDadoComplementarPerfil", query = "SELECT d FROM DadoComplementarPerfil d WHERE d.dadoComplementarPerfil = :dadoComplementarPerfil")})
public class DadoComplementarPerfil implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "idDadoComplementarPerfil")
    private Integer idDadoComplementarPerfil;
    @Column(name = "descricaoDadoComplementar")
    private String descricaoDadoComplementar;
    @Column(name = "tipoDadoComplementar")
    private String tipoDadoComplementar;
    @Column(name = "dadoComplementarPerfil")
    private String dadoComplementarPerfil;
    @JoinColumn(name = "idCliente", referencedColumnName = "idCliente")
    @ManyToOne(optional = false)
    private Cliente idCliente;

    public DadoComplementarPerfil() {
    }

    public DadoComplementarPerfil(Integer idDadoComplementarPerfil) {
        this.idDadoComplementarPerfil = idDadoComplementarPerfil;
    }

    public Integer getIdDadoComplementarPerfil() {
        return idDadoComplementarPerfil;
    }

    public void setIdDadoComplementarPerfil(Integer idDadoComplementarPerfil) {
        this.idDadoComplementarPerfil = idDadoComplementarPerfil;
    }

    public String getDescricaoDadoComplementar() {
        return descricaoDadoComplementar;
    }

    public void setDescricaoDadoComplementar(String descricaoDadoComplementar) {
        this.descricaoDadoComplementar = descricaoDadoComplementar;
    }

    public String getTipoDadoComplementar() {
        return tipoDadoComplementar;
    }

    public void setTipoDadoComplementar(String tipoDadoComplementar) {
        this.tipoDadoComplementar = tipoDadoComplementar;
    }

    public String getDadoComplementarPerfil() {
        return dadoComplementarPerfil;
    }

    public void setDadoComplementarPerfil(String dadoComplementarPerfil) {
        this.dadoComplementarPerfil = dadoComplementarPerfil;
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
        hash += (idDadoComplementarPerfil != null ? idDadoComplementarPerfil.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof DadoComplementarPerfil)) {
            return false;
        }
        DadoComplementarPerfil other = (DadoComplementarPerfil) object;
        if ((this.idDadoComplementarPerfil == null && other.idDadoComplementarPerfil != null) || (this.idDadoComplementarPerfil != null && !this.idDadoComplementarPerfil.equals(other.idDadoComplementarPerfil))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "dominio.DadoComplementarPerfil[ idDadoComplementarPerfil=" + idDadoComplementarPerfil + " ]";
    }
    
}
