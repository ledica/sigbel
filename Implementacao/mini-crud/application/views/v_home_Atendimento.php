<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?= link_tag('template/plugins/datatables/dataTables.bootstrap.css') ?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lista de Atendimentos</h3>
        <?= anchor('atendimento/create', '<i class="fa fa-plus"></i> Novo Atendimento', array('class' => 'btn btn-default pull-right')); ?>
    </div><!-- /.box-header -->
    <div class="box-body">
        <?php if ($Atendimento->num_rows() > 0): ?>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Atendimento->result() as $cadastro): ?>
                        <tr >
                            <td class='selecionado col-md-1 ' data-id="<?= $cadastro->idAtendimento ?>" data-nome="<?= $cadastro->nomeCliente ?>"><?= $cadastro->idAtendimento ?></td>
                            <td class='selecionado col-md-8' data-id="<?= $cadastro->idAtendimento ?>" data-nome="<?= $cadastro->nomeCliente ?>"><?= $cadastro->nomeCliente ?></td>
                            <td class='selecionado col-md-1' data-id="<?= $cadastro->idAtendimento ?>" data-nome="<?= $cadastro->nomeCliente ?>"><?= $cadastro->data ?></td>
                            <td class='selecionado col-md-1' data-id="<?= $cadastro->idAtendimento ?>" data-nome="<?= $cadastro->nomeCliente ?>"><?= $cadastro->horario ?></td>
                            <td class="tools col-md-1">
                                <div class="col-md-6"><?= anchor("atendimento/edit/$cadastro->idAtendimento", "<i class='fa fa-edit'></i>", array('title' => 'Editar')) ?></div>
                                <div class="col-md-6"><a href="#" class='confirma_exclusao' data-id="<?= $cadastro->idAtendimento ?>" title="Remover"><i class="fa fa-trash-o"></i></a></div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
            </table>
        <?php else: ?>
            <h4>Nenhum registro cadastrado.</h4>
        <?php endif; ?>
    </div>
</div>	

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
                <button type="button" class="btn btn-danger" id="btn_excluir_cliente_atendimento">Sim. Acabe com ele</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- Main Footer -->

  
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
