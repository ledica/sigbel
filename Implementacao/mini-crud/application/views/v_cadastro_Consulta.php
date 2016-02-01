<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-3">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title"><?= $titulo ?></h1>
        </div> 
        <div class="box-body">
            <?= form_open('Consulta/store') ?>
            <div class="form-group ">
                <label for="idCliente">Cliente</label><span class="erro"><?php echo form_error('idCliente') ? : ''; ?></span>

                <select name="idCliente" id="idCliente" class="select2" style="width: 100%;">
                    <?php
                    $protocolo = $this->m_cliente->get()->result();
                    $option = "";
                    foreach ($protocolo as $linha) {

                        if ($linha->idCliente == $idCliente) {
                            $option .= "<option value='$linha->idCliente'  selected='selected'>$linha->nomeCliente</option>";
                        } else {
                            $option .= "<option value='$linha->idCliente'  >$linha->nomeCliente</option>";
                        }
                    }
                    echo $option;
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="data">Data</label><span class="erro"><?php echo form_error('data') ? : ''; ?></span>
                <input type="text" name="data" id="data" class="form-control" value="<?= set_value('data') ? : (isset($data) ? $data : ''); ?>" />
            </div>
            <div class="form-group">
                <label for="horario">Horário</label><span class="erro"><?php echo form_error('horario') ? : ''; ?></span>
                <input type="text" name="horario" id="horario" class="form-control" value="<?= set_value('horario') ? : (isset($horario) ? $horario : ''); ?>" />
            </div>
            <div class="form-group text-right">
                <input type="submit" value="Salvar" class="btn btn-success" />
            </div>
            <input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
            <?= form_close(); ?>
        </div>
    </div>	
</div>

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