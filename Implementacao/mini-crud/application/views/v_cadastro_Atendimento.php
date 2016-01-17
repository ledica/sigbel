<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?= $titulo ?></h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <?= form_open('Atendimento/store') ?>
        <div class="form-group col-md-12">
            <label for="idConsulta col-md-12">Selecione Consulta para Cadastro de Atendimento</label><span class="erro"><?php echo form_error('idConsulta') ? : ''; ?></span>
            <select name="idConsulta" id="idConsulta" class="select2 col-md-12" >
                <?php
                $protocolo = $this->m_consulta->get()->result();
                $option = "";
                foreach ($protocolo as $linha) {
                    $atendimento = $this->m_atendimento->get(null, null, $linha->idConsulta);
                    if ($linha->idConsulta == $idConsulta) {
                        $option .= "<option value='$linha->idConsulta'  selected='selected'>$linha->data | $linha->horario | $linha->nomeCliente</option>";
                    } elseif ($atendimento->num_rows() == 0) {
                        $option .= "<option value='$linha->idConsulta'  >$linha->data | $linha->horario | $linha->nomeCliente</option>";
                    }
                }
                echo $option;
                ?>
            </select>
        </div>


        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
                <li><a href="#3" data-toggle="tab">3</a></li>
                <li><a href="#2" data-toggle="tab">2</a></li>
                <li class="active"><a href="#1" data-toggle="tab">1</a></li>


            </ul>
            <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="1" style="position: relative;">
                    <div class="form-group col-md-4">
                        <label for="apendiceXifoide">Apendice Xifoide</label><span class="erro"><?php echo form_error('apendiceXifoide') ? : ''; ?></span>
                        <input type="text" name="apendiceXifoide" id="apendiceXifoide" class="form-control" value="<?= set_value('apendiceXifoide') ? : (isset($apendiceXifoide) ? $apendiceXifoide : ''); ?>"autofocus='true' />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="anguloDeTales">Angulo de Tales</label><span class="erro"><?php echo form_error('anguloDeTales') ? : ''; ?></span>
                        <input type="text" name="anguloDeTales" id="anguloDeTales" class="form-control" value="<?= set_value('anguloDeTales') ? : (isset($anguloDeTales) ? $anguloDeTales : ''); ?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="abdomeInferior">Abdomem Inferior</label><span class="erro"><?php echo form_error('abdomeInferior') ? : ''; ?></span>
                        <input type="text" name="abdomeInferior" id="abdomeInferior" class="form-control" value="<?= set_value('abdomeInferior') ? : (isset($abdomeInferior) ? $abdomeInferior : ''); ?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="peso">Peso</label><span class="erro"><?php echo form_error('peso') ? : ''; ?></span>
                        <input type="text" name="peso" id="peso" class="form-control" value="<?= set_value('peso') ? : (isset($peso) ? $peso : ''); ?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="axilar">Axilar</label><span class="erro"><?php echo form_error('axilar') ? : ''; ?></span>
                        <input type="text" name="axilar" id="axilar" class="form-control" value="<?= set_value('axilar') ? : (isset($axilar) ? $axilar : ''); ?>" />
                    </div>


                </div>


                <div class="chart tab-pane" id="2" style="position: relative;">
                    <div class="form-group col-md-6">
                        <label for="bracoDireito10cm">Braco Direito 10cm</label><span class="erro"><?php echo form_error('bracoDireito10cm') ? : ''; ?></span>
                        <input type="text" name="bracoDireito10cm" id="bracoDireito10cm" class="form-control" value="<?= set_value('bracoDireito10cm') ? : (isset($bracoDireito10cm) ? $bracoDireito10cm : ''); ?>" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bracoDireito20cm">Braco Direito 20cm</label><span class="erro"><?php echo form_error('bracoDireito20cm') ? : ''; ?></span>
                        <input type="text" name="bracoDireito20cm" id="bracoDireito20cm" class="form-control" value="<?= set_value('bracoDireito20cm') ? : (isset($bracoDireito20cm) ? $bracoDireito20cm : ''); ?>" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bracoEsquerdo10cm">Braco Esquerdo 10cm</label><span class="erro"><?php echo form_error('bracoEsquerdo10cm') ? : ''; ?></span>
                        <input type="text" name="bracoEsquerdo10cm" id="bracoEsquerdo10cm" class="form-control" value="<?= set_value('bracoEsquerdo10cm') ? : (isset($bracoEsquerdo10cm) ? $bracoEsquerdo10cm : ''); ?>" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bracoEsquerdo20cm">Braco Esquerdo 20cm</label><span class="erro"><?php echo form_error('bracoEsquerdo20cm') ? : ''; ?></span>
                        <input type="text" name="bracoEsquerdo20cm" id="bracoEsquerdo20cm" class="form-control" value="<?= set_value('bracoEsquerdo20cm') ? : (isset($bracoEsquerdo20cm) ? $bracoEsquerdo20cm : ''); ?>" />
                    </div>



                </div>


                <div class="chart tab-pane " id="3" style="position: relative;">
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="coxaDireita10cm">Coxa Direita 10cm</label><span class="erro"><?php echo form_error('coxaDireita10cm') ? : ''; ?></span>
                            <input type="text" name="coxaDireita10cm" id="coxaDireita10cm" class="form-control" value="<?= set_value('coxaDireita10cm') ? : (isset($coxaDireita10cm) ? $coxaDireita10cm : ''); ?>" />
                        </div>
                        <div class="form-group ">
                            <label for="coxaDireita20cm">Coxa Direita 20cm</label><span class="erro"><?php echo form_error('coxaDireita20cm') ? : ''; ?></span>
                            <input type="text" name="coxaDireita20cm" id="coxaDireita20cm" class="form-control" value="<?= set_value('coxaDireita20cm') ? : (isset($coxaDireita20cm) ? $coxaDireita20cm : ''); ?>" />
                        </div>
                        <div class="form-group ">
                            <label for="coxaDireita30cm">Coxa Direita 30cm</label><span class="erro"><?php echo form_error('coxaDireita30cm') ? : ''; ?></span>
                            <input type="text" name="coxaDireita30cm" id="coxaDireita30cm" class="form-control" value="<?= set_value('coxaDireita30cm') ? : (isset($coxaDireita30cm) ? $coxaDireita30cm : ''); ?>" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="coxaEsquerda10cm">Coxa Esquerda 10cm</label><span class="erro"><?php echo form_error('coxaEsquerda10cm') ? : ''; ?></span>
                            <input type="text" name="coxaEsquerda10cm" id="coxaEsquerda10cm" class="form-control" value="<?= set_value('coxaEsquerda10cm') ? : (isset($coxaEsquerda10cm) ? $coxaEsquerda10cm : ''); ?>" />
                        </div>
                        <div class="form-group ">
                            <label for="coxaEsquerda20cm">Coxa Esquerda 20cm</label><span class="erro"><?php echo form_error('coxaEsquerda20cm') ? : ''; ?></span>
                            <input type="text" name="coxaEsquerda20cm" id="coxaEsquerda20cm" class="form-control" value="<?= set_value('coxaEsquerda20cm') ? : (isset($coxaEsquerda20cm) ? $coxaEsquerda20cm : ''); ?>" />
                        </div>
                        <div class="form-group ">
                            <label for="coxaEsquerda30cm">Coxa Esquerda 30cm</label><span class="erro"><?php echo form_error('coxaEsquerda30cm') ? : ''; ?></span>
                            <input type="text" name="coxaEsquerda30cm" id="coxaEsquerda30cm" class="form-control" value="<?= set_value('coxaEsquerda30cm') ? : (isset($coxaEsquerda30cm) ? $coxaEsquerda30cm : ''); ?>" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="pernaDireita10cm">Perna Direita 10cm</label><span class="erro"><?php echo form_error('pernaDireita10cm') ? : ''; ?></span>
                            <input type="text" name="pernaDireita10cm" id="pernaDireita10cm" class="form-control" value="<?= set_value('pernaDireita10cm') ? : (isset($pernaDireita10cm) ? $pernaDireita10cm : ''); ?>" />
                        </div>
                        <div class="form-group ">
                            <label for="pernaDireita20cm">Perna Direita 20cm</label><span class="erro"><?php echo form_error('pernaDireita20cm') ? : ''; ?></span>
                            <input type="text" name="pernaDireita20cm" id="pernaDireita20cm" class="form-control" value="<?= set_value('pernaDireita20cm') ? : (isset($pernaDireita20cm) ? $pernaDireita20cm : ''); ?>" />
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="pernaEsquerda10cm">Perna Esquerda 10cm</label><span class="erro"><?php echo form_error('pernaEsquerda10cm') ? : ''; ?></span>
                            <input type="text" name="pernaEsquerda10cm" id="pernaEsquerda10cm" class="form-control" value="<?= set_value('pernaEsquerda10cm') ? : (isset($pernaEsquerda10cm) ? $pernaEsquerda10cm : ''); ?>" />
                        </div>
                        <div class="form-group ">
                            <label for="pernaEsquerda20cm">Perna Esquerda 20cm</label><span class="erro"><?php echo form_error('pernaEsquerda20cm') ? : ''; ?></span>
                            <input type="text" name="pernaEsquerda20cm" id="pernaEsquerda20cm" class="form-control" value="<?= set_value('pernaEsquerda20cm') ? : (isset($pernaEsquerda20cm) ? $pernaEsquerda20cm : ''); ?>" />
                        </div>
                    </div>



                </div>


            </div><!-- /.nav-tabs-custom -->
            <div class="form-group text-right col-md-12">
                <input type="submit" value="Salvar" class="btn btn-success" />
            </div>


            <input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">


            <?= form_close(); ?>
        </div>
    </div>
</div>
    <?php if ($id > 0) { ?>

        <div class="row"><hr></div>

        <div class="box">
            <div class="box-header">
                <?= form_open('Atendimento/createProtocoloAtendimento') ?>
                <input  type='hidden' name="idConsulta" id="idConsulta" value="<?= set_value('idConsulta') ? : (isset($idConsulta) ? $idConsulta : '') ?>"  />

                <div class="form-group col-md-5">
                    <label for="idProtocolo" class="">Protocolo:</label>
                    <select name="idProtocolo" id="idProtocolo" class="select2 col-md-6"> 
                        <?php
                        $protocolo = $this->m_protocolo->get()->result();
                        $option = "";
                        foreach ($protocolo as $linha) {
                            $option .= "<option value='$linha->idProtocolo'>$linha->descricaoProtocolo</option>";
                        }
                        echo $option;
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="idRegiaoGordura" >Região Gordura Localizada:</label>
                    <select name="idRegiaoGordura" id="idRegiaoGordura" class="select2 col-md-6"> 
                        <?php
                        $regiaogordura = $this->m_regiaogordura->get()->result();
                        $option = "";
                        foreach ($regiaogordura as $linha) {
                            $option .= "<option value='$linha->idRegiaoGordura'>$linha->descricaoRegiao</option>";
                        }
                        echo $option;
                        ?>
                    </select>
                </div>


                <div class="form-group text-right  col-md-2">
                    <button type="submit" class="btn btn-default pull-right"><i class="fa fa-plus"></i>Novo Protocolo</button>
                </div>
                <hr>   

                <?= form_close(); ?>

            </div><!-- /.box-header -->
            <div class="box-body">
                <?php if ($ProtocoloAtendimento->num_rows() > 0): ?>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Protocolo</th>
                                <th>Região Gordura Localizada</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ProtocoloAtendimento->result() as $cadastro): ?>
                                <tr >
                                    <td><?= $cadastro->idProtocoloAtendimento ?></td>
                                    <td><?= $cadastro->descricaoProtocolo ?></td>
                                    <td><?= $cadastro->descricaoRegiao ?></td>
                                    <td>
                                        <div class="col-md-3"><a href="#" class='confirma_exclusao' data-id="<?= $cadastro->idProtocoloAtendimento ?>" data-nome="<?= $cadastro->nomeCliente ?>">Excluir</a></div>
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
        <?php
    }
    ?>

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
                    <button type="button" class="btn btn-danger" id="btn_excluir_protocolo">Sim. Acabe com ele</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
