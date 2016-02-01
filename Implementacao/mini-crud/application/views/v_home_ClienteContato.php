<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?= link_tag('template/plugins/datatables/dataTables.bootstrap.css') ?>

<section class="content">        
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Clientes</h3>
                    <?= anchor('cliente/create', '<i class="fa fa-plus"></i> Novo Cliente', array('class' => 'btn btn-default pull-right')); ?>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <?php if ($Cliente->num_rows() > 0): ?>  
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-6">Nome </th>
                                    <th class="col-md-2">CPF</th>
                                    <th class="col-md-2">Telefone</th>
                                    <th class="col-md-1">Acões</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Cliente->result() as $cadastro): ?>

                                    <tr class="odd" role="row">
                                        <td class='selecionado sorting_1 col-md-1' data-id="<?= $cadastro->idCliente ?>" data-nome="<?= $cadastro->nomeCliente ?>"><?= $cadastro->idCliente ?></td>
                                        <td class='selecionado col-md-5' data-id="<?= $cadastro->idCliente ?>" data-nome="<?= $cadastro->nomeCliente ?>"><?= $cadastro->nomeCliente ?></td>
                                        <td class='selecionado col-md-1' data-id="<?= $cadastro->idCliente ?>" data-nome="<?= $cadastro->numeroCPF ?>"><?= $cadastro->numeroCPF ?></td>
                                        <td class='selecionado col-md-1' data-id="<?= $cadastro->idCliente ?>" data-nome="<?= $cadastro->telefone ?>"><?= $cadastro->telefone ?></td>
                                        <td class="col-md-3">
                                            <div class="tools">
                                                <div class='col-md-6'><?= anchor("cliente/edit/$cadastro->idCliente", "  <i class='fa fa-edit'></i>", array('title' => 'Editar')) ?></div>
                                                <div class='col-md-6'><a href="#" class='confirma_exclusao' data-id="<?= $cadastro->idCliente ?>" data-nome="<?= $cadastro->nomeCliente ?>" title='Remover'><i class="fa fa-trash-o"></i></a></div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-6">Nome </th>
                                    <th class="col-md-2">CPF</th>
                                    <th class="col-md-2">Telefone</th>
                                    <th class="col-md-1">Acões</th>
                                </tr>
                            </tfoot>
                        </table>
                    <?php else: ?>
                        <h4>Nenhum registro cadastrado.</h4>
                    <?php endif; ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<div class="modal fade" id="modal_confirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirmação de Exclusão</h4>
            </div>
            <div class="modal-body">
                <p>Deseja realmente excluir o registro <strong><span id="nome_exclusao"></span></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Agora não</button>
                <button type="button" class="btn btn-danger" id="btn_excluir_cliente">Sim. Acabe com ele</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- REQUIRED JS SCRIPTS -->


<script>

    var base_url = "<?= base_url(); ?>";

    $(function () {
        $('.confirma_exclusao').on('click', function (e) {
            e.preventDefault();

            var nome = $(this).data('nome');
            var id = $(this).data('id');

            $('#modal_confirmation').data('nome', nome);
            $('#modal_confirmation').data('id', id);
            $('#modal_confirmation').modal('show');
        });

        $('#modal_confirmation').on('show.bs.modal', function () {
            var nome = $(this).data('nome');
            $('#nome_exclusao').text(nome);
        });

        $('#btn_excluir_cliente').click(function () {
            var id = $('#modal_confirmation').data('id');
            document.location.href = base_url + "cliente/delete/" + id;
        });
        $('#btn_excluir_consulta').click(function () {
            var id = $('#modal_confirmation').data('id');
            document.location.href = base_url + "consulta/delete/" + id;
        });
        $('#btn_excluir_atendimento').click(function () {
            var id = $('#modal_confirmation').data('id');
            document.location.href = base_url + "atendimento/delete/" + id;
        });
        $('#btn_excluir_pagamento').click(function () {
            var id = $('#modal_confirmation').data('id');
            document.location.href = base_url + "pagamento/delete/" + id;
        });
        $('#btn_excluir_protocolo').click(function () {
            var id = $('#modal_confirmation').data('id');
            document.location.href = base_url + "ProtocoloAtendimento/delete/" + id;
        });
    });
</script>
<!-- DataTables -->
<script src="<?= base_url('template/plugins/datatables/jquery.dataTables.min.js') ?>"></script>	
<script src="<?= base_url('template/plugins/datatables/dataTables.bootstrap.min.js') ?>"></script>	
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('template/dist/js/demo.js') ?>"></script>	
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

</script>
