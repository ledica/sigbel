
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
 * @author root
 */

@Entity
@Table(name = "Alergia")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Alergia.findAll", query = "SELECT a FROM Alergia a"),
    @NamedQuery(name = "Alergia.findByIdDadoComplementar", query = "SELECT a FROM Alergia a WHERE a.idDadoComplementar = :idDadoComplementar"),
    @NamedQuery(name = "Alergia.findByDescricaoDadoComplementar", query = "SELECT a FROM Alergia a WHERE a.descricaoDadoComplementar = :descricaoDadoComplementar"),
    @NamedQuery(name = "Alergia.findByTempoAlergia", query = "SELECT a FROM Alergia a WHERE a.tempoAlergia = :tempoAlergia"),
    @NamedQuery(name = "Alergia.findByTipoDadoComplementar", query = "SELECT a FROM Alergia a WHERE a.tipoDadoComplementar = :tipoDadoComplementar")})
public class Alergia implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "idDadoComplementar")
    private Integer idDadoComplementar;
    @Column(name = "descricaoDadoComplementar")
    private String descricaoDadoComplementar;
    @Column(name = "tempoAlergia")
    @Temporal(TemporalType.TIMESTAMP)
    private Date tempoAlergia;
    @Column(name = "tipoDadoComplementar")
    private Integer tipoDadoComplementar;
    @JoinColumn(name = "idCliente", referencedColumnName = "idCliente")
    @ManyToOne(optional = false)
    private Cliente idCliente;

    public Alergia() {
    }

    public Alergia(Integer idDadoComplementar) {
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

    public Date getTempoAlergia() {
        return tempoAlergia;
    }

    public void setTempoAlergia(Date tempoAlergia) {
        this.tempoAlergia = tempoAlergia;
    }

    public Integer getTipoDadoComplementar() {
        return tipoDadoComplementar;
    }

    public void setTipoDadoComplementar(Integer tipoDadoComplementar) {
        this.tipoDadoComplementar = tipoDadoComplementar;
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
        if (!(object instanceof Alergia)) {
            return false;
        }
        Alergia other = (Alergia) object;
        if ((this.idDadoComplementar == null && other.idDadoComplementar != null) || (this.idDadoComplementar != null && !this.idDadoComplementar.equals(other.idDadoComplementar))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "Model.Alergia[ idDadoComplementar=" + idDadoComplementar + " ]";
    } 
    
}
