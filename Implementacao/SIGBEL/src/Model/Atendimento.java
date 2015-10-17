package Model;

import java.util.Collection;

public class Atendimento {

    private int idConsulta;

    private float apendiceXifoide;

    private float anguloDeTales;

    private float abdomeInferior;

    private float peso;

    private float axilar;

    private float bracoDireito10cm;

    private float bracoEsquerdo10cm;

    private float bracoDireito20cm;

    private float bracoEsquerdo20cm;

    private float coxaDireita10cm;

    private float coxaDireita20cm;

    private float coxaDireita30cm;

    private float coxaEsquerda10cm;

    private float coxaEsquerda20cm;

    private float coxaEsquerda30cm;

    private float pernaDireita10cm;

    private float pernaDireita20cm;

    private float pernaEsquerda10cm;

    private float pernaEsquerda20cm;

    private Consulta consulta;

    private Collection<Protocolo> protocolo;

    public Atendimento() {
    }

    
    public Atendimento(int idConsulta, float apendiceXifoide, float anguloDeTales, float abdomeInferior, float peso, float axilar, float bracoDireito10cm, float bracoEsquerdo10cm, float bracoDireito20cm, float bracoEsquerdo20cm, float coxaDireita10cm, float coxaDireita20cm, float coxaDireita30cm, float coxaEsquerda10cm, float coxaEsquerda20cm, float coxaEsquerda30cm, float pernaDireita10cm, float pernaDireita20cm, float pernaEsquerda10cm, float pernaEsquerda20cm) {
        this.idConsulta = idConsulta;
        this.apendiceXifoide = apendiceXifoide;
        this.anguloDeTales = anguloDeTales;
        this.abdomeInferior = abdomeInferior;
        this.peso = peso;
        this.axilar = axilar;
        this.bracoDireito10cm = bracoDireito10cm;
        this.bracoEsquerdo10cm = bracoEsquerdo10cm;
        this.bracoDireito20cm = bracoDireito20cm;
        this.bracoEsquerdo20cm = bracoEsquerdo20cm;
        this.coxaDireita10cm = coxaDireita10cm;
        this.coxaDireita20cm = coxaDireita20cm;
        this.coxaDireita30cm = coxaDireita30cm;
        this.coxaEsquerda10cm = coxaEsquerda10cm;
        this.coxaEsquerda20cm = coxaEsquerda20cm;
        this.coxaEsquerda30cm = coxaEsquerda30cm;
        this.pernaDireita10cm = pernaDireita10cm;
        this.pernaDireita20cm = pernaDireita20cm;
        this.pernaEsquerda10cm = pernaEsquerda10cm;
        this.pernaEsquerda20cm = pernaEsquerda20cm;
    }

    
    
    public int getIdConsulta() {
        return idConsulta;
    }

    public void setIdConsulta(int idConsulta) {
        this.idConsulta = idConsulta;
    }

    public float getApendiceXifoide() {
        return apendiceXifoide;
    }

    public void setApendiceXifoide(float apendiceXifoide) {
        this.apendiceXifoide = apendiceXifoide;
    }

    public float getAnguloDeTales() {
        return anguloDeTales;
    }

    public void setAnguloDeTales(float anguloDeTales) {
        this.anguloDeTales = anguloDeTales;
    }

    public float getAbdomeInferior() {
        return abdomeInferior;
    }

    public void setAbdomeInferior(float abdomeInferior) {
        this.abdomeInferior = abdomeInferior;
    }

    public float getPeso() {
        return peso;
    }

    public void setPeso(float peso) {
        this.peso = peso;
    }

    public float getAxilar() {
        return axilar;
    }

    public void setAxilar(float axilar) {
        this.axilar = axilar;
    }

    public float getBracoDireito10cm() {
        return bracoDireito10cm;
    }

    public void setBracoDireito10cm(float bracoDireito10cm) {
        this.bracoDireito10cm = bracoDireito10cm;
    }

    public float getBracoEsquerdo10cm() {
        return bracoEsquerdo10cm;
    }

    public void setBracoEsquerdo10cm(float bracoEsquerdo10cm) {
        this.bracoEsquerdo10cm = bracoEsquerdo10cm;
    }

    public float getBracoDireito20cm() {
        return bracoDireito20cm;
    }

    public void setBracoDireito20cm(float bracoDireito20cm) {
        this.bracoDireito20cm = bracoDireito20cm;
    }

    public float getBracoEsquerdo20cm() {
        return bracoEsquerdo20cm;
    }

    public void setBracoEsquerdo20cm(float bracoEsquerdo20cm) {
        this.bracoEsquerdo20cm = bracoEsquerdo20cm;
    }

    public float getCoxaDireita10cm() {
        return coxaDireita10cm;
    }

    public void setCoxaDireita10cm(float coxaDireita10cm) {
        this.coxaDireita10cm = coxaDireita10cm;
    }

    public float getCoxaDireita20cm() {
        return coxaDireita20cm;
    }

    public void setCoxaDireita20cm(float coxaDireita20cm) {
        this.coxaDireita20cm = coxaDireita20cm;
    }

    public float getCoxaDireita30cm() {
        return coxaDireita30cm;
    }

    public void setCoxaDireita30cm(float coxaDireita30cm) {
        this.coxaDireita30cm = coxaDireita30cm;
    }

    public float getCoxaEsquerda10cm() {
        return coxaEsquerda10cm;
    }

    public void setCoxaEsquerda10cm(float coxaEsquerda10cm) {
        this.coxaEsquerda10cm = coxaEsquerda10cm;
    }

    public float getCoxaEsquerda20cm() {
        return coxaEsquerda20cm;
    }

    public void setCoxaEsquerda20cm(float coxaEsquerda20cm) {
        this.coxaEsquerda20cm = coxaEsquerda20cm;
    }

    public float getCoxaEsquerda30cm() {
        return coxaEsquerda30cm;
    }

    public void setCoxaEsquerda30cm(float coxaEsquerda30cm) {
        this.coxaEsquerda30cm = coxaEsquerda30cm;
    }

    public float getPernaDireita10cm() {
        return pernaDireita10cm;
    }

    public void setPernaDireita10cm(float pernaDireita10cm) {
        this.pernaDireita10cm = pernaDireita10cm;
    }

    public float getPernaDireita20cm() {
        return pernaDireita20cm;
    }

    public void setPernaDireita20cm(float pernaDireita20cm) {
        this.pernaDireita20cm = pernaDireita20cm;
    }

    public float getPernaEsquerda10cm() {
        return pernaEsquerda10cm;
    }

    public void setPernaEsquerda10cm(float pernaEsquerda10cm) {
        this.pernaEsquerda10cm = pernaEsquerda10cm;
    }

    public float getPernaEsquerda20cm() {
        return pernaEsquerda20cm;
    }

    public void setPernaEsquerda20cm(float pernaEsquerda20cm) {
        this.pernaEsquerda20cm = pernaEsquerda20cm;
    }

    public Consulta getConsulta() {
        return consulta;
    }

    public void setConsulta(Consulta consulta) {
        this.consulta = consulta;
    }

}
