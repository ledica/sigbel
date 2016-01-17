<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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