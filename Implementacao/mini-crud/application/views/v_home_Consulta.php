<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lista de Consultas</h3>
        <?= anchor('consulta/create', '<i class="fa fa-plus"></i> Nova Consulta', array('class' => 'btn btn-default pull-right')); ?>
    </div><!-- /.box-header -->
    <div class="box-body">

        <?php if ($cadastros = $this->m_consulta->get($id, $idCliente)->num_rows() > 0): ?>
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
                    <?php foreach ($cadastros = $this->m_consulta->get($id, $idCliente)->result() as $cadastro): ?>
                        <tr >
                            <td class='selecionado col-md-1' data-id="<?= $cadastro->idConsulta ?>" data-nome="<?= $cadastro->nomeCliente ?>"><?= $cadastro->idConsulta ?></td>
                            <td class='selecionado col-md-6' data-id="<?= $cadastro->idConsulta ?>" data-nome="<?= $cadastro->nomeCliente ?>"><?= $cadastro->nomeCliente ?></td>
                            <td class='selecionado col-md-1' data-id="<?= $cadastro->idConsulta ?>" data-nome="<?= $cadastro->nomeCliente ?>"><?= $cadastro->data ?></td>
                            <td class='selecionado col-md-1' data-id="<?= $cadastro->idConsulta ?>" data-nome="<?= $cadastro->nomeCliente ?>"><?= $cadastro->horario ?></td>
                            <td class="col-md-2">
                                <div class="col-md-3"><?= anchor("consulta/atendimento/$cadastro->idConsulta", "<i class='fa fa-hospital-o'></i>", array('title' => 'Atendimento')) ?></div>
                                <div class="col-md-3"><?= anchor("pagamento/create/$cadastro->idConsulta", "<i class='fa fa-money'></i>", array('title' => 'Pagamento')) ?></div>
                                <div class="col-md-3"><?= anchor("Consulta/edit/$cadastro->idConsulta", "<i class='fa fa-edit'></i>", array('title' => 'Editar')) ?></div>
                                <div class="col-md-3"><a href="#" class='confirma_exclusao' data-id="<?= $cadastro->idConsulta ?>" title="Remover"><i class="fa fa-trash-o"></i></a></div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
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
                <button type="button" class="btn btn-danger" id="btn_excluir_consulta">Sim. Acabe com ele</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

