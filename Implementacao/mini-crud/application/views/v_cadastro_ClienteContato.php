<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- daterange picker -->
<?= link_tag('template/plugins/datepicker/datepicker3.css') ?>
<?= link_tag('template/plugins/timepicker/bootstrap-timepicker.css') ?>
<!-- Main content -->
<section class="content">
    <br>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $titulo ?></h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
            <?= form_open_multipart('Cliente/store') ?>
            <div class="form-group col-xs-10">
                <label for="nomeCliente">Nome</label><span class="erro"><?php echo form_error('nomeCliente') ? : ''; ?></span>
                <input type="text" name="nomeCliente" id="nomeCliente" placeholder="Entre com o nome do cliente" class="form-control" value="<?= set_value('nomeCliente') ? : (isset($nomeCliente) ? $nomeCliente : '') ?>" autofocus='true' />
            </div>


            <div class="form-group col-xs-2">
                <label  for="sexo">Sexo</label><span class="erro"><?php echo form_error('sexo') ? : ''; ?></span>
                <select name="sexo" id="sexo" class="form-control select2" style="width: 100%;">
                    <?php if ($sexo == "F") { ?>
                        <option value='F' selected="selected">F</option>
                        <option value='M' >M</option>
                    <?php } else { ?>
                        <option value='F'>F</option>
                        <option value='M' selected="selected">M</option>

                    <?php } ?>


                </select>
            </div><!-- /.form-group -->


            <div class="form-group col-xs-4">
                <label for="telefone">Telefone</label><span class="erro"><?php echo form_error('telefone') ? : ''; ?></span>
                <input type="text" name="telefone" id="telefone" class="form-control" value="<?= set_value('telefone') ? : (isset($telefone) ? $telefone : ''); ?>" />
            </div>
            <div class="form-group col-xs-8">
                <label for="email">E-mail</label><span class="erro"><?php echo form_error('email') ? : ''; ?></span>
                <input type="email" name="email" id="email" class="form-control" value="<?= set_value('email') ? : (isset($email) ? $email : ''); ?>" />
            </div>
            <div class="form-group col-xs-4">
                <label for="numeroRG">Número RG</label><span class="erro"><?php echo form_error('numeroRG') ? : ''; ?></span>
                <input type="text" name="numeroRG" id="numeroRG" class="form-control" value="<?= set_value('numeroRG') ? : (isset($numeroRG) ? $numeroRG : ''); ?>" />
            </div>
            <div class="form-group col-xs-4">
                <label for="numeroCPF">Número CPF</label><span class="erro"><?php echo form_error('numeroCPF') ? : ''; ?></span>
                <input type="text" name="numeroCPF" id="numeroCPF" class="form-control" value="<?= set_value('numeroCPF') ? : (isset($numeroCPF) ? $numeroCPF : ''); ?>" />
            </div>
            <div class="form-group col-xs-4">
                <label>Data Nascimento</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input class="form-control data" name="dataNascimento" id="dataNascimento" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask="" type="text">
                </div><!-- /.input group -->
            </div>

            <div class="form-group col-xs-10">
                <label for="endereco">Endereço</label><span class="erro"><?php echo form_error('endereco') ? : ''; ?></span>
                <input type="text" name="endereco" id="endereco" class="form-control" value="<?= set_value('endereco') ? : (isset($endereco) ? $endereco : ''); ?>" />
            </div>
            <div class="form-group col-xs-2">
                <label for="numeroEndereco">Número Endereço</label><span class="erro"><?php echo form_error('numeroEndereco') ? : ''; ?></span>
                <input type="text" name="numeroEndereco" id="numeroEndereco" class="form-control" value="<?= set_value('numeroEndereco') ? : (isset($numeroEndereco) ? $numeroEndereco : ''); ?>" />
            </div>
            <div class="form-group col-xs-6">
                <label for="bairro">Bairro</label><span class="erro"><?php echo form_error('bairro') ? : ''; ?></span>
                <input type="text" name="bairro" id="bairro" class="form-control" value="<?= set_value('bairro') ? : (isset($bairro) ? $bairro : ''); ?>" />
            </div>
            <div class="form-group col-xs-6">
                <label for="cidade">Cidade</label><span class="erro"><?php echo form_error('cidade') ? : ''; ?></span>
                <input type="text" name="cidade" id="bairro" class="form-control" value="<?= set_value('cidade') ? : (isset($cidade) ? $cidade : ''); ?>" />
            </div>
            <div class="form-group col-xs-4">
                <label for="profissao">Profissão</label><span class="erro"><?php echo form_error('profissao') ? : ''; ?></span>
                <input type="text" name="profissao" id="profissao" class="form-control" value="<?= set_value('profissao') ? : (isset($profissao) ? $profissao : ''); ?>" />
            </div>
            <div class="form-group col-xs-4">
                <label for="ocupacao">Ocupação</label><span class="erro"><?php echo form_error('ocupacao') ? : ''; ?></span>
                <input type="text" name="ocupacao" id="ocupacao" class="form-control" value="<?= set_value('ocupacao') ? : (isset($ocupacao) ? $ocupacao : ''); ?>" />
            </div>
            <div class="form-group col-xs-4">
                <label for="estadoCivil">Estado Civil</label><span class="erro"><?php echo form_error('estadoCivil') ? : ''; ?></span>
                <input type="text" name="estadoCivil" id="estadoCivil" class="form-control" value="<?= set_value('estadoCivil') ? : (isset($estadoCivil) ? $estadoCivil : ''); ?>" />
            </div>
            <div class="form-group">
                <label for="fotografia">Enviar Fotografia</label>
                <input type="file" name="fotografia" id="fotografia" size="20" />
                <p class="help-block">Envie uma foto do seu cliente para melhor visualização.</p>
            </div>


        </div><!-- /.box-body -->

        <div class="box-footer text-right">


            <input type="submit" value="Salvar" class="btn btn-success" />
        </div>
        <input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
        <?= form_close(); ?>
    </div>	
    <!-- Your Page Content Here -->
</div><!-- /.content-wrapper -->
</section><!-- /.content -->


<!-- Select2 -->
<script src="<?= base_url('template/plugins/select2/select2.full.min.js') ?>"></script>     
<script src="<?= base_url('template/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>	
<script src="<?= base_url('template/plugins/timepicker/bootstrap-timepicker.js') ?>"></script>	

<script>

    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
        //Datemask dd/mm/yyyy
        $("#data").datepicker({
            dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
        });
        $("#dataNascimento").datepicker({
            dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
        });
        $("#dataCadastro").datepicker({
            dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
        });
        $("#dataUltimaGestacao").datepicker({
            dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
        });
        $("#dataUltimaMenstruacao").datepicker({
            dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
        });
        $("#dataInicioAnticoncepcional").datepicker({
            dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
        });
        $("#tempoAlergia").datepicker({
            dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
        });
        $("#tempoCirurgia").datepicker({
            dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
        });
        $("#horario").timepicker();
    });</script>

