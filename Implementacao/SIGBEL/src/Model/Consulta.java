package Model;

import java.sql.Time;
import java.util.Date;

public class Consulta {

    private int idConsulta;

    private int idCliente;

    private Date dataConsulta;

    private Time horario;

    private Cliente cliente;
    
    private String nomeCliente;
    private Atendimento atendimento;
    
    public Consulta(int idConsulta, int idCliente, Date dataConsulta, Time horario, String nomeCliente) {
        this.idConsulta = idConsulta;
        this.idCliente = idCliente;
        this.dataConsulta = dataConsulta;
        this.horario = horario;
        this.nomeCliente = nomeCliente;
    }

    public Consulta(int idConsulta, int idCliente, Date dataConsulta, Time horario, Cliente cliente, String nomeCliente, Atendimento atendimento) {
        this.idConsulta = idConsulta;
        this.idCliente = idCliente;
        this.dataConsulta = dataConsulta;
        this.horario = horario;
        this.cliente = cliente;
        this.nomeCliente = nomeCliente;
        this.atendimento = atendimento;
    }
 

    public Consulta() {
    }

    public Consulta(int idConsulta, int idCliente, Date dataConsulta, Time horario, Cliente cliente, Atendimento atendimento) {
        this.idConsulta = idConsulta;
        this.idCliente = idCliente;
        this.dataConsulta = dataConsulta;
        this.horario = horario;
        this.cliente = cliente;
        this.atendimento = atendimento;
    }

    public Consulta(int idConsulta, int idCliente, Date dataConsulta, Time horario) {
        this.idConsulta = idConsulta;
        this.idCliente = idCliente;
        this.dataConsulta = dataConsulta;
        this.horario = horario;
    }

    public Consulta(int idConsulta, int idCliente, Date dataConsulta, Time horario, Cliente cliente) {
        this.idConsulta = idConsulta;
        this.idCliente = idCliente;
        this.dataConsulta = dataConsulta;
        this.horario = horario;
        this.cliente = cliente;
    }

    

    public int getIdConsulta() {
        return idConsulta;
    }

    public int getIdCliente() {
        return idCliente;
    }

    public Date getDataConsulta() {
        return dataConsulta;
    }

    public Time getHorario() {
        return horario;
    }

    public Cliente getCliente() {
        return cliente;
    }

    public Atendimento getAtendimento() {
        return atendimento;
    }  
    
    public String getNomeCliente() {
        return nomeCliente;
    }

    public void setNomeCliente(String nomeCliente) {
        this.nomeCliente = nomeCliente;
    }

    public void setIdConsulta(int idConsulta) {
        this.idConsulta = idConsulta;
    }

    public void setIdCliente(int idCliente) {
        this.idCliente = idCliente;
    }

    public void setDataConsulta(Date dataConsulta) {
        this.dataConsulta = dataConsulta;
    }

    public void setHorario(Time horario) {
        this.horario = horario;
    }

    public void setCliente(Cliente cliente) {
        this.cliente = cliente;
    }
    

    

}
