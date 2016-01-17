<section class="content">
    oi <?php echo $nomeCliente;?>
    <br>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Contato do Cliente</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form">
               <!-- abre o formulário de cadastro -->
        <?php echo form_open('Cliente_c/cadastrar', 'id="form-contato"'); ?>
            <div class="box-body">
                <div class="form-group">
                    <label for="nomeCliente">Nome</label>
                    <input class="form-control" id="nomeCliente" placeholder="Entre com o nome do cliente" type="text">
                </div>
                <div class="form-group">
                    <label for="numeroRg">RG</label>
                    <input class="form-control" id="numeroRg" placeholder="Entre com o número do RG" type="text">
                </div>
                <div class="form-group">
                    <label for="numeroCPF">CPF</label>
                    <input class="form-control" id="numeroCPF" placeholder="Entre com o número do CPF" type="text">
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Data Nascimento</label>
                    <input class="form-control" id="dataNascimento" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="dataCadastro">Data Cadastro</label>
                    <input class="form-control" id="dataCadastro" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <input class="form-control" id="sexo" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereco</label>
                    <input class="form-control" id="endereco" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="numeroEndereco">Número</label>
                    <input class="form-control" id="numeroEndereco" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input class="form-control" id="bairro" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input class="form-control" id="cidade" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input class="form-control" id="telefone" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="">Ocupação</label>
                    <input class="form-control" id="" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="">Profissão</label>
                    <input class="form-control" id="" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="estadoCivil">Estado Civil</label>
                    <input class="form-control" id="estadoCivil" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" placeholder="Enter email" type="email">
                </div>

                <div class="form-group">
                    <label for="fotografia">Enviar Foto</label>
                    <input id="fotografia" type="file">
                    <p class="help-block">Envie uma foto do seu cliente para melhor visualização.</p>
                </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
                <input type="submit" class="btn btn-primary"/>Salvar
            </div>
        </form>
    </div>	
    <!-- Your Page Content Here -->

</section>