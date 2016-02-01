<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form'));
    }

    /**
     * Método principal do mini-crud
     * @param nenhum
     * @return view
     */
    public function index() {
        $variaveis['Cliente'] = $this->m_cliente->get();
        $this->session->set_userdata('idCliente', NULL);
        $this->template->load('template', 'v_home_ClienteContato', $variaveis);
    }

    public function relatorio() {

        $idCliente = $this->session->userdata('idCliente');
        if ($idCliente > 0) {
            $variaveis['quantidadeConsultaAgendada'] = $quantidadeConsultaAgendada;
            $variaveis['Atendimento'] = $this->m_atendimento->get(null, $idCliente);
            $this->load->view('v_relatorioAtendimento', $variaveis);
        }
    }

    /**
     * Carrega o formulário para novo cadastro
     * @param nenhum
     * @return view
     */
    public function create() {
        $this->session->set_userdata('idCliente', NULL);
        $variaveis['titulo'] = 'Novo Cadastro Contato Cliente';
        $this->template->load('template', 'v_cadastro_ClienteContato', $variaveis);
    }

    public function createAlergia() {

        $this->load->library('form_validation');
        $regras = array(
            array(
                'field' => 'idCliente',
                'label' => 'idCliente',
                'rules' => 'required'
            ),
            array(
                'field' => 'descricaoDadoComplementar',
                'label' => 'descricaoDadoComplementar',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($regras);
        $dataString = $this->input->post('tempoAlergia');
        $date = DateTime::createFromFormat('d/m/Y', $dataString);

        $dados = array(
            "descricaoDadoComplementar" => $this->input->post('descricaoDadoComplementar'),
            "tempoAlergia" => $date->format("Y-m-d"),
            "idCliente" => $this->input->post('idCliente'),
        );

        if ($this->m_alergia->store($dados)) {
            $cadastros = $this->m_cliente->get($this->input->post('idCliente'));
            if ($cadastros->num_rows() > 0) {
                $variaveis['nomeCliente'] = $cadastros->row()->nomeCliente;
                $variaveis['titulo'] = 'Edição de Registro Perfil';
                $variaveis['id'] = $cadastros->row()->idCliente;
                $variaveis['idCliente'] = $cadastros->row()->idCliente;
                $variaveis['queixaPrincipal'] = $cadastros->row()->queixaPrincipal;
                $variaveis['cancer'] = $cadastros->row()->cancer;
                $variaveis['tipoCancer'] = $cadastros->row()->tipoCancer;
                $variaveis['familiarComCancer'] = $cadastros->row()->familiarComCancer;
                $variaveis['problemaHepatico'] = $cadastros->row()->problemaHepatico;
                $variaveis['varizes'] = $cadastros->row()->varizes;
                $variaveis['fragilidadeCapilar'] = $cadastros->row()->fragilidadeCapilar;
                $variaveis['problemaCirculatorio'] = $cadastros->row()->problemaCirculatorio;
                $variaveis['hipertensao'] = $cadastros->row()->hipertensao;
                $variaveis['hipotensao'] = $cadastros->row()->hipotensao;
                $variaveis['problemaCardiaco'] = $cadastros->row()->problemaCardiaco;
                $variaveis['marcaPasso'] = $cadastros->row()->marcaPasso;
                $variaveis['proteseMetalica'] = $cadastros->row()->proteseMetalica;
                $variaveis['disturbioTireoide'] = $cadastros->row()->disturbioTireoide;
                $variaveis['diabete'] = $cadastros->row()->diabete;
                $variaveis['menstruacao'] = $cadastros->row()->menstruacao;
                $variaveis['reposicaoHormonal'] = $cadastros->row()->reposicaoHormonal;
                $variaveis['tpm'] = $cadastros->row()->tpm;
                $variaveis['diu'] = $cadastros->row()->diu;
                $variaveis['anticoncepcional'] = $cadastros->row()->anticoncepcional;
                $variaveis['dataInicioAnticoncepcional'] = $cadastros->row()->dataInicioAnticoncepcional;
                $variaveis['quantidadeGestacao'] = $cadastros->row()->quantidadeGestacao;
                $variaveis['dataUltimaMenstruacao'] = $cadastros->row()->dataUltimaMenstruacao;
                $variaveis['dataUltimaGestacao'] = $cadastros->row()->dataUltimaGestacao;
                $variaveis['quantidadeBebidaAlcoolica'] = $cadastros->row()->quantidadeBebidaAlcoolica;
                $variaveis['descricaoBebidaAlcoolica'] = $cadastros->row()->descricaoBebidaAlcoolica;
                $variaveis['quantidadeAtividadeFisica'] = $cadastros->row()->quantidadeAtividadeFisica;
                $variaveis['quantidadeCigarro'] = $cadastros->row()->quantidadeCigarro;
                $variaveis['quantidadeIngestaoLiquido'] = $cadastros->row()->quantidadeIngestaoLiquido;
                $variaveis['prisaoDeVentre'] = $cadastros->row()->prisaoDeVentre;
                $variaveis['dificuldadeUrinar'] = $cadastros->row()->dificuldadeUrinar;
                $variaveis['usaRoupaApertada'] = $cadastros->row()->usaRoupaApertada;
                $variaveis['posicaoDuranteTrabalho'] = $cadastros->row()->posicaoDuranteTrabalho;

                $this->template->load('template', 'v_cadastro_Perfil', $variaveis);
            }
        } else {
            $variaveis['mensagem'] = "Registro não encontrado.";
            $this->load->view('errors/html/v_erro', $variaveis);
        }
    }

    public function createCirurgia() {

        $this->load->library('form_validation');
        $regras = array(
            array(
                'field' => 'idCliente',
                'label' => 'idCliente',
                'rules' => 'required'
            ),
            array(
                'field' => 'descricaoDadoComplementar',
                'label' => 'descricaoDadoComplementar',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($regras);
        $dataString = $this->input->post('tempoCirurgia');
        $date = DateTime::createFromFormat('d/m/Y', $dataString);

        $dados = array(
            "descricaoDadoComplementar" => $this->input->post('descricaoDadoComplementar'),
            "tempoCirurgia" => $date->format("Y-m-d"),
            "idCliente" => $this->input->post('idCliente'),
        );


        if ($this->m_cirurgia->store($dados)) {
            $dados['mensagem'] = "Dados gravados com sucesso!";

            $cadastros = $this->m_cliente->get($this->input->post('idCliente'));
            if ($cadastros->num_rows() > 0) {
                $variaveis['nomeCliente'] = $cadastros->row()->nomeCliente;
                $variaveis['titulo'] = 'Edição de Registro Perfil';
                $variaveis['id'] = $cadastros->row()->idCliente;
                $variaveis['idCliente'] = $cadastros->row()->idCliente;
                $variaveis['queixaPrincipal'] = $cadastros->row()->queixaPrincipal;
                $variaveis['cancer'] = $cadastros->row()->cancer;
                $variaveis['tipoCancer'] = $cadastros->row()->tipoCancer;
                $variaveis['familiarComCancer'] = $cadastros->row()->familiarComCancer;
                $variaveis['problemaHepatico'] = $cadastros->row()->problemaHepatico;
                $variaveis['varizes'] = $cadastros->row()->varizes;
                $variaveis['fragilidadeCapilar'] = $cadastros->row()->fragilidadeCapilar;
                $variaveis['problemaCirculatorio'] = $cadastros->row()->problemaCirculatorio;
                $variaveis['hipertensao'] = $cadastros->row()->hipertensao;
                $variaveis['hipotensao'] = $cadastros->row()->hipotensao;
                $variaveis['problemaCardiaco'] = $cadastros->row()->problemaCardiaco;
                $variaveis['marcaPasso'] = $cadastros->row()->marcaPasso;
                $variaveis['proteseMetalica'] = $cadastros->row()->proteseMetalica;
                $variaveis['disturbioTireoide'] = $cadastros->row()->disturbioTireoide;
                $variaveis['diabete'] = $cadastros->row()->diabete;
                $variaveis['menstruacao'] = $cadastros->row()->menstruacao;
                $variaveis['reposicaoHormonal'] = $cadastros->row()->reposicaoHormonal;
                $variaveis['tpm'] = $cadastros->row()->tpm;
                $variaveis['diu'] = $cadastros->row()->diu;
                $variaveis['anticoncepcional'] = $cadastros->row()->anticoncepcional;
                $variaveis['dataInicioAnticoncepcional'] = $cadastros->row()->dataInicioAnticoncepcional;
                $variaveis['quantidadeGestacao'] = $cadastros->row()->quantidadeGestacao;
                $variaveis['dataUltimaMenstruacao'] = $cadastros->row()->dataUltimaMenstruacao;
                $variaveis['dataUltimaGestacao'] = $cadastros->row()->dataUltimaGestacao;
                $variaveis['quantidadeBebidaAlcoolica'] = $cadastros->row()->quantidadeBebidaAlcoolica;
                $variaveis['descricaoBebidaAlcoolica'] = $cadastros->row()->descricaoBebidaAlcoolica;
                $variaveis['quantidadeAtividadeFisica'] = $cadastros->row()->quantidadeAtividadeFisica;
                $variaveis['quantidadeCigarro'] = $cadastros->row()->quantidadeCigarro;
                $variaveis['quantidadeIngestaoLiquido'] = $cadastros->row()->quantidadeIngestaoLiquido;
                $variaveis['prisaoDeVentre'] = $cadastros->row()->prisaoDeVentre;
                $variaveis['dificuldadeUrinar'] = $cadastros->row()->dificuldadeUrinar;
                $variaveis['usaRoupaApertada'] = $cadastros->row()->usaRoupaApertada;
                $variaveis['posicaoDuranteTrabalho'] = $cadastros->row()->posicaoDuranteTrabalho;

                $this->template->load('template', 'v_cadastro_Perfil', $variaveis);
            }
        } else {
            $variaveis['mensagem'] = "Registro não encontrado.";
            $this->load->view('errors/html/v_erro', $variaveis);
        }
    }

    public function createDadoPerfil() {

        $this->load->library('form_validation');
        $regras = array(
            array(
                'field' => 'idCliente',
                'label' => 'idCliente',
                'rules' => 'required'
            ),
            array(
                'field' => 'descricaoDadoComplementar',
                'label' => 'descricaoDadoComplementar',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($regras);

        $dados = array(
            "descricaoDadoComplementar" => $this->input->post('descricaoDadoComplementar'),
            "idCliente" => $this->input->post('idCliente'),
        );
        if ($this->m_dadoperfil->store($dados)) {
            $dados['mensagem'] = "Dados gravados com sucesso!";

            $cadastros = $this->m_cliente->get($this->input->post('idCliente'));
            if ($cadastros->num_rows() > 0) {
                $variaveis['nomeCliente'] = $cadastros->row()->nomeCliente;
                $variaveis['titulo'] = 'Edição de Registro Perfil';
                $variaveis['id'] = $cadastros->row()->idCliente;
                $variaveis['idCliente'] = $cadastros->row()->idCliente;
                $variaveis['queixaPrincipal'] = $cadastros->row()->queixaPrincipal;
                $variaveis['cancer'] = $cadastros->row()->cancer;
                $variaveis['tipoCancer'] = $cadastros->row()->tipoCancer;
                $variaveis['familiarComCancer'] = $cadastros->row()->familiarComCancer;
                $variaveis['problemaHepatico'] = $cadastros->row()->problemaHepatico;
                $variaveis['varizes'] = $cadastros->row()->varizes;
                $variaveis['fragilidadeCapilar'] = $cadastros->row()->fragilidadeCapilar;
                $variaveis['problemaCirculatorio'] = $cadastros->row()->problemaCirculatorio;
                $variaveis['hipertensao'] = $cadastros->row()->hipertensao;
                $variaveis['hipotensao'] = $cadastros->row()->hipotensao;
                $variaveis['problemaCardiaco'] = $cadastros->row()->problemaCardiaco;
                $variaveis['marcaPasso'] = $cadastros->row()->marcaPasso;
                $variaveis['proteseMetalica'] = $cadastros->row()->proteseMetalica;
                $variaveis['disturbioTireoide'] = $cadastros->row()->disturbioTireoide;
                $variaveis['diabete'] = $cadastros->row()->diabete;
                $variaveis['menstruacao'] = $cadastros->row()->menstruacao;
                $variaveis['reposicaoHormonal'] = $cadastros->row()->reposicaoHormonal;
                $variaveis['tpm'] = $cadastros->row()->tpm;
                $variaveis['diu'] = $cadastros->row()->diu;
                $variaveis['anticoncepcional'] = $cadastros->row()->anticoncepcional;
                $variaveis['dataInicioAnticoncepcional'] = $cadastros->row()->dataInicioAnticoncepcional;
                $variaveis['quantidadeGestacao'] = $cadastros->row()->quantidadeGestacao;
                $variaveis['dataUltimaMenstruacao'] = $cadastros->row()->dataUltimaMenstruacao;
                $variaveis['dataUltimaGestacao'] = $cadastros->row()->dataUltimaGestacao;
                $variaveis['quantidadeBebidaAlcoolica'] = $cadastros->row()->quantidadeBebidaAlcoolica;
                $variaveis['descricaoBebidaAlcoolica'] = $cadastros->row()->descricaoBebidaAlcoolica;
                $variaveis['quantidadeAtividadeFisica'] = $cadastros->row()->quantidadeAtividadeFisica;
                $variaveis['quantidadeCigarro'] = $cadastros->row()->quantidadeCigarro;
                $variaveis['quantidadeIngestaoLiquido'] = $cadastros->row()->quantidadeIngestaoLiquido;
                $variaveis['prisaoDeVentre'] = $cadastros->row()->prisaoDeVentre;
                $variaveis['dificuldadeUrinar'] = $cadastros->row()->dificuldadeUrinar;
                $variaveis['usaRoupaApertada'] = $cadastros->row()->usaRoupaApertada;
                $variaveis['posicaoDuranteTrabalho'] = $cadastros->row()->posicaoDuranteTrabalho;

                $this->template->load('template', 'v_cadastro_Perfil', $variaveis);
            }
        } else {
            $variaveis['mensagem'] = "Registro não encontrado.";
            $this->load->view('errors/html/v_erro', $variaveis);
        }
    }

    /**
     * Salva o registro no banco de dados.
     * Caso venha o valor id, indica uma edição, caso contrário, um insert.
     * @param campos do formulário
     * @return view
     */
    public function store() {
        $this->load->library('form_validation');

        $regras = array(
            array(
                'field' => 'nomeCliente',
                'label' => 'Nome',
                'rules' => 'required'
            ),
            array(
                'field' => 'telefone',
                'label' => 'telefone',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'E-mail',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'numeroCPF',
                'label' => 'CPF',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($regras);

        if ($this->form_validation->run() == FALSE) {
            $variaveis['titulo'] = 'Novo Registro Contato Cliente';
            $this->template->load('template', 'v_cadastro_ClienteContato', $variaveis);
        } else {

            $id = $this->session->userdata('idCliente');


            $dados = array(
                "nomeCliente" => $this->input->post('nomeCliente'),
                "telefone" => $this->input->post('telefone'),
                "email" => $this->input->post('email'),
                "numeroCPF" => $this->input->post('numeroCPF'),
                "numeroRG" => $this->input->post('numeroRG'),
                "dataNascimento" => $this->input->post('dataNascimento'),
                "dataCadastro" => $this->input->post('dataCadastro'),
                "sexo" => $this->input->post('sexo'),
                "endereco" => $this->input->post('endereco'),
                "numeroEndereco" => $this->input->post('numeroEndereco'),
                "bairro" => $this->input->post('bairro'),
                "cidade" => $this->input->post('cidade'),
                "profissao" => $this->input->post('profissao'),
                "ocupacao" => $this->input->post('ocupacao'),
                "estadoCivil" => $this->input->post('estadoCivil'),
                "fotografia" => $this->input->post('fotografia')
            );
//Configurações necessárias para fazer upload do arquivo
            //Pasta onde será feito o upload
            $config['upload_path'] = './fotos/';
            //Tipos suportados
            $config['allowed_types'] = 'gif|jpg|png';
            //Configurando atributos do arquivo imagem que iremos receber
            $config['max_size'] = '1000';
            $config['max_width'] = '1024';
            $config['max_height'] = '6000';


            //Carregando a lib com as configurações feitas
            $this->load->library('upload', $config);

            //Fazendo o upload do arquivo e direcionando para a view de erro ou de sucesso
            if (!$this->upload->do_upload('fotografia')) {
                //   $error = array('error' => $this->upload->display_errors());
                //    $this->load->view('upload/erro', $error);
            } else {
                //renomeia a foto
                $nomeorig = "fotos/" . $this->upload->file_name;
                $nomedestino = "fotos/" . md5($this->upload->file_name) . $this->upload->file_ext;
                rename($nomeorig, $nomedestino);
                $dados['fotografia'] = $nomedestino;
            }


            if ($this->m_cliente->store($dados, $id)) {
                $variaveis['mensagem'] = "Dados gravados com sucesso!";
                $variaveis['Cliente'] = $this->m_cliente->get();
                $this->template->load('template', 'v_sucesso', $variaveis);
            } else {
                $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
                $this->load->view('errors/html/v_erro', $variaveis);
            }
        }
    }

    /**
     * Chama o formulário com os campos preenchidos pelo registro selecioando.
     * @param $id do registro
     * @return view
     */
    public function edit($idCliente = NULL) {
        if ($this->session->userdata('idCliente')) {
            $id = $this->session->userdata('idCliente');
        } else {
            $id = $idCliente;
        }
        if ($id) {

            $cadastros = $this->m_cliente->get($id);

            if ($cadastros->num_rows() > 0) {
                $variaveis['titulo'] = 'Edição de Registro';
                $variaveis['id'] = $cadastros->row()->idCliente;
                $variaveis['nomeCliente'] = $cadastros->row()->nomeCliente;
                $variaveis['telefone'] = $cadastros->row()->telefone;
                $variaveis['email'] = $cadastros->row()->email;
                $variaveis['numeroCPF'] = $cadastros->row()->numeroCPF;
                $variaveis['numeroRG'] = $cadastros->row()->numeroRG;
                $variaveis['dataNascimento'] = $cadastros->row()->dataNascimento;
                $variaveis['dataCadastro'] = $cadastros->row()->dataCadastro;
                $variaveis['sexo'] = $cadastros->row()->sexo;
                $variaveis['endereco'] = $cadastros->row()->endereco;
                $variaveis['numeroEndereco'] = $cadastros->row()->numeroEndereco;
                $variaveis['bairro'] = $cadastros->row()->bairro;
                $variaveis['cidade'] = $cadastros->row()->cidade;
                $variaveis['profissao'] = $cadastros->row()->profissao;
                $variaveis['ocupacao'] = $cadastros->row()->ocupacao;
                $variaveis['estadoCivil'] = $cadastros->row()->estadoCivil;
                $variaveis['fotografia'] = $cadastros->row()->fotografia;

                $this->template->load('template', 'v_cadastro_ClienteContato', $variaveis);
            } else {
                $variaveis['mensagem'] = "Registro não encontrado.";
                $this->load->view('errors/html/v_erro', $variaveis);
            }
        }
    }

    public function perfil() {

        $this->load->library('form_validation');
        $id = $this->session->userdata('idCliente');

        $dados = array(
            "queixaPrincipal" => $this->input->post('queixaPrincipal'),
            "cancer" => $this->input->post('cancer'),
            "tipoCancer" => $this->input->post('tipoCancer'),
            "familiarComCancer" => $this->input->post('familiarComCancer'),
            "problemaHepatico" => $this->input->post('problemaHepatico'),
            "varizes" => $this->input->post('varizes'),
            "fragilidadeCapilar" => $this->input->post('fragilidadeCapilar'),
            "problemaCirculatorio" => $this->input->post('problemaCirculatorio'),
            "hipertensao" => $this->input->post('hipertensao'),
            "hipotensao" => $this->input->post('hipotensao'),
            "problemaCardiaco" => $this->input->post('problemaCardiaco'),
            "marcaPasso" => $this->input->post('marcaPasso'),
            "proteseMetalica" => $this->input->post('proteseMetalica'),
            "disturbioTireoide" => $this->input->post('disturbioTireoide'),
            "diabete" => $this->input->post('diabete'),
            "menstruacao" => $this->input->post('menstruacao'),
            "reposicaoHormonal" => $this->input->post('reposicaoHormonal'),
            "tpm" => $this->input->post('tpm'),
            "diu" => $this->input->post('diu'),
            "anticoncepcional" => $this->input->post('anticoncepcional'),
            "dataInicioAnticoncepcional" => $this->input->post('dataAnticoncepcional'),
            "quantidadeGestacao" => $this->input->post('quantidadeGestacao'),
            "dataUltimaMenstruacao" => $this->input->post('dataUltimaMenstruacao'),
            "dataUltimaGestacao" => $this->input->post('dataUltimaGestacao'),
            "quantidadeBebidaAlcoolica" => $this->input->post('quantidadeBebidaAlcoolica'),
            "descricaoBebidaAlcoolica" => $this->input->post('descricaoBebidaAlcoolica'),
            "quantidadeAtividadeFisica" => $this->input->post('quantidadeAtividadeFisica'),
            "quantidadeCigarro" => $this->input->post('quantidadeCigarro'),
            "quantidadeIngestaoLiquido" => $this->input->post('quantidadeIngestaoLiquido'),
            "prisaoDeVentre" => $this->input->post('prisaoDeVentre'),
            "dificuldadeUrinar" => $this->input->post('dificuldadeUrinar'),
            "usaRoupaApertada" => $this->input->post('usaRoupaApertada'),
            "posicaoDuranteTrabalho" => $this->input->post('posicaoDuranteTrabalho')
        );
        if ($this->m_cliente->store($dados, $id)) {
            $variaveis['mensagem'] = "Dados gravados com sucesso!";
            $this->template->load('template', 'v_sucesso', $variaveis);
        } else {
            $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
            $this->load->view('errors/html/v_erro', $variaveis);
        }
    }

    public function editPerfil() {
        $id = $this->session->userdata('idCliente');
        if ($id) {
            $cadastros = $this->m_cliente->get($id);
            if ($cadastros->num_rows() > 0) {
                $variaveis['nomeCliente'] = $cadastros->row()->nomeCliente;
                $variaveis['titulo'] = 'Edição de Registro Perfil';
                $variaveis['id'] = $cadastros->row()->idCliente;
                $variaveis['idCliente'] = $cadastros->row()->idCliente;
                $variaveis['queixaPrincipal'] = $cadastros->row()->queixaPrincipal;
                $variaveis['cancer'] = $cadastros->row()->cancer;
                $variaveis['tipoCancer'] = $cadastros->row()->tipoCancer;
                $variaveis['familiarComCancer'] = $cadastros->row()->familiarComCancer;
                $variaveis['problemaHepatico'] = $cadastros->row()->problemaHepatico;
                $variaveis['varizes'] = $cadastros->row()->varizes;
                $variaveis['fragilidadeCapilar'] = $cadastros->row()->fragilidadeCapilar;
                $variaveis['problemaCirculatorio'] = $cadastros->row()->problemaCirculatorio;
                $variaveis['hipertensao'] = $cadastros->row()->hipertensao;
                $variaveis['hipotensao'] = $cadastros->row()->hipotensao;
                $variaveis['problemaCardiaco'] = $cadastros->row()->problemaCardiaco;
                $variaveis['marcaPasso'] = $cadastros->row()->marcaPasso;
                $variaveis['proteseMetalica'] = $cadastros->row()->proteseMetalica;
                $variaveis['disturbioTireoide'] = $cadastros->row()->disturbioTireoide;
                $variaveis['diabete'] = $cadastros->row()->diabete;
                $variaveis['menstruacao'] = $cadastros->row()->menstruacao;
                $variaveis['reposicaoHormonal'] = $cadastros->row()->reposicaoHormonal;
                $variaveis['tpm'] = $cadastros->row()->tpm;
                $variaveis['diu'] = $cadastros->row()->diu;
                $variaveis['anticoncepcional'] = $cadastros->row()->anticoncepcional;
                $variaveis['dataInicioAnticoncepcional'] = $cadastros->row()->dataInicioAnticoncepcional;
                $variaveis['quantidadeGestacao'] = $cadastros->row()->quantidadeGestacao;
                $variaveis['dataUltimaMenstruacao'] = $cadastros->row()->dataUltimaMenstruacao;
                $variaveis['dataUltimaGestacao'] = $cadastros->row()->dataUltimaGestacao;
                $variaveis['quantidadeBebidaAlcoolica'] = $cadastros->row()->quantidadeBebidaAlcoolica;
                $variaveis['descricaoBebidaAlcoolica'] = $cadastros->row()->descricaoBebidaAlcoolica;
                $variaveis['quantidadeAtividadeFisica'] = $cadastros->row()->quantidadeAtividadeFisica;
                $variaveis['quantidadeCigarro'] = $cadastros->row()->quantidadeCigarro;
                $variaveis['quantidadeIngestaoLiquido'] = $cadastros->row()->quantidadeIngestaoLiquido;
                $variaveis['prisaoDeVentre'] = $cadastros->row()->prisaoDeVentre;
                $variaveis['dificuldadeUrinar'] = $cadastros->row()->dificuldadeUrinar;
                $variaveis['usaRoupaApertada'] = $cadastros->row()->usaRoupaApertada;
                $variaveis['posicaoDuranteTrabalho'] = $cadastros->row()->posicaoDuranteTrabalho;

                $this->template->load('template', 'v_cadastro_Perfil', $variaveis);
            } else {
                $variaveis['mensagem'] = "Registro não encontrado.";
                $this->load->view('errors/html/v_erro', $variaveis);
            }
        }
    }

    /**
     * Função que exclui o registro através do id.
     * @param $id do registro a ser excluído.
     * @return boolean;
     */
    public function delete($id = null) {
        if ($this->m_cliente->delete($id)) {
            $variaveis['mensagem'] = "Registro excluído com sucesso!";
            $this->template->load('template', 'v_sucesso', $variaveis);
        }
    }

}
