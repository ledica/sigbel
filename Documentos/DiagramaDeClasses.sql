CREATE TABLE Consulta (
 idConsulta INT,
 dataConsulta DATE,
 horario DATE
);


CREATE TABLE Atendimento (
 dataAtendimento DATE,
 apendiceXifoide FLOAT(10),
 anguloDeTales FLOAT(10),
 abdomeInferior FLOAT(10),
 peso FLOAT(10),
 axilar FLOAT(10),
 bracoDireito10cm FLOAT(10),
 bracoEsquerdo10cm FLOAT(10),
 bracoDireito20cm FLOAT(10),
 bracoEsquerdo20cm FLOAT(10),
 coxaDireita10cm FLOAT(10),
 coxaDireita20cm FLOAT(10),
 coxaDireita30cm FLOAT(10),
 coxaEsquerda10cm FLOAT(10),
 coxaEsquerda20cm FLOAT(10),
 coxaEsquerda30cm FLOAT(10),
 pernaDireita10cm FLOAT(10),
 pernaDireita20cm FLOAT(10),
 pernaEsquerda10cm FLOAT(10),
 pernaEsquerda20cm FLOAT(10)
);


CREATE TABLE Cliente (
 idCliente INT,
 nome VARCHAR(10),
 numeroRG VARCHAR(10),
 numeroCPF VARCHAR(10),
 dataNascimento DATE,
 sexo VARCHAR(10),
 endereco VARCHAR(10),
 numeroEndereco VARCHAR(10),
 bairro VARCHAR(10),
 cidade VARCHAR(10),
 telefone VARCHAR(10),
 email VARCHAR(10),
 dataCadastro DATE,
 ocupacao VARCHAR(10),
 profissao VARCHAR(10),
 fotografiaCliente VARCHAR(10)
);


CREATE TABLE Pagamento (
 idPagamento INT,
 dataCadastro DATE,
 valorServico FLOAT(10),
 valorPago FLOAT(10),
 descricaoServico VARCHAR(10)
);


CREATE TABLE Perfil (
 queixaPrincipal VARCHAR(10),
 cancer BIT(10),
 tipoCancer VARCHAR(10),
 familiarComCancer VARCHAR(10),
 problemaHepatico BIT(10),
 varizes BIT(10),
 fragilidadeCapilar BIT(10),
 problemaCirculatorio BIT(10),
 hipertensao BIT(10),
 hipotensao BIT(10),
 problemaCardiaco BIT(10),
 marcaPasso BIT(10),
 proteseMetalica BIT(10),
 disturbioTireoide BIT(10),
 diabete BIT(10),
 reposicaoHormonal BIT(10),
 tpm BIT(10),
 diu BIT(10),
 anticoncepcional VARCHAR(10),
 dataInicioAnticoncepcional DATE,
 quantidadeGestacao INT,
 dataUltimaMenstruacao DATE,
 dataUltimaGestacao DATE,
 quantidadeBebidaAlcoolica FLOAT(10),
 descricaoBebidaAlcoolica VARCHAR(10),
 quantidadeAtividadeFisica INT,
 quantidadeCigarro FLOAT(10),
 prisaoDeVentre BIT(10),
 dificuldadeUrinar BIT(10),
 usaRoupaApertada BIT(10),
 posicaoDuranteTrabalho VARCHAR(10)
);


CREATE TABLE ProtocoloAtendimento (
 idProtocoloAtendimento INT
);


CREATE TABLE RegiaoGorduraLocalizada (
 idRegiao INT,
 nomeRegiao VARCHAR(10)
);


CREATE TABLE DadoComplementarPerfil (
 idDadoComplementar INT,
 descricaoDadoComplementar VARCHAR(10)
);


CREATE TABLE Enum (
);


CREATE TABLE Float (
);


CREATE TABLE Protocolo (
 idProtocolo INT,
 descricaoProtocolo VARCHAR(10)
);


CREATE TABLE Alergia (
 tempoAlergia VARCHAR(10)
);


CREATE TABLE Cirurgia (
 tempoCirurgia VARCHAR(10)
);


