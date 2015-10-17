package Model;

import java.util.Date;
import java.util.Collection;

public class Perfil {

	private int idCliente;

	private Date dataCadastro;

	private String queixaPrincipal;

	private boolean cancer;

	private String tipoCancer;

	private String familiarComCancer;

	private boolean problemaHepatico;

	private boolean varizes;

	private boolean fragilidadeCapilar;

	private boolean problemaCirculatorio;

	private boolean hipertensao;

	private boolean hipotensao;

	private boolean problemaCardiaco;

	private boolean marcaPasso;

	private boolean proteseMetalica;

	private boolean disturbioTireoide;

	private boolean diabete;

	private Enum menstruacao;

	private boolean reposicaoHormonal;

	private boolean tpm;

	private boolean diu;

	private String anticoncepcional;

	private Date dataInicioAnticoncepcional;

	private int quantidadeGestacao;

	private Date dataUltimaMenstruacao;

	private Date dataUltimaGestacao;

	private float quantidadeBebidaAlcoolica;

	private String descricaoBebidaAlcoolica;

	private int quantidadeAtividadeFisica;

	private float quantidadeCigarro;

	private float quantidadeIngestaoLiquido;

	private boolean prisaoDeVentre;

	private boolean dificuldadeUrinar;

	private boolean usaRoupasApertadas;

	private String posicaoDuranteTrabalho;

	private Collection<Alergia> alergia;

	private Collection<Cirurgia> cirurgia;

	private Collection<DadoComplementarPerfil> dadoComplementarPerfil;

	private Cliente cliente;

}
