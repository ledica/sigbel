<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Main content -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Perfil / Anamnese</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?= form_open('cliente/perfil') ?>
    <div class="box-body">
        <input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
        <div class="form-group col-md-12">
            <label for="queixaPrincipal">Principal Queixa</label><span class="erro"><?php echo form_error('queixaPrincipal') ? : ''; ?></span>
            <textarea name="queixaPrincipal" id="queixaPrincipal" class="form-control" rows="3" placeholder="Enter ..." ><?= set_value('queixaPrincipal') ? : (isset($queixaPrincipal) ? $queixaPrincipal : ''); ?></textarea>
        </div>
        <div class="col-md-12">
            <input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
            <div class="form-group col-md-2">
                <div class="checkbox">
                    <label for="cancer"><span class="erro"><?php echo form_error('cancer') ? : ''; ?></span>
                        <?php if ($cancer == "1") { ?>
                            <input name="cancer" value="1" id="cancer"type="checkbox" checked="checked">
                        <?php } else { ?>                              
                            <input name="cancer" value="1" id="cancer" type="checkbox">
                        <?php } ?>
                        Câncer
                    </label>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="tipoCancer" class="col-sm-4">Tipo Câncer</label><?php echo form_error('tipoCancer') ? : ''; ?></span>
                <div class="col-sm-8">
                    <input class="form-control" name="tipoCancer" id="tipoCancer" placeholder="" type="text" value="<?= set_value('tipoCancer') ? : (isset($tipoCancer) ? $tipoCancer : ''); ?>"/>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="familiarComCancer" class="col-sm-2">Quem</label><?php echo form_error('familiarComCancer') ? : ''; ?></span>
                <div class="col-sm-10">
                    <input class="form-control" name="familiarComCancer"id="familiarComCancer" placeholder="" type="text" value="<?= set_value('familiarComCancer') ? : (isset($familiarComCancer) ? $familiarComCancer : ''); ?>"/>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-4">
                <div class="checkbox">
                    <label for="problemaHepatico">
                        <?php if ($problemaHepatico == "1") { ?>
                            <input name="problemaHepatico" id="problemaHepatico" value="1" type="checkbox" checked="checked">
                        <?php } else { ?>                              
                            <input name="problemaHepatico" id="problemaHepatico" value="1" type="checkbox">
                        <?php } ?>
                        Problemas Hepáticos
                    </label><?php echo form_error('problemaHepatico') ? : ''; ?></span>
                </div>

                <div class="checkbox">
                    <label for="problemaCirculatorio">
                        <?php if ($problemaCirculatorio == "1") { ?>
                            <input name="problemaCirculatorio" id="problemaCirculatorio" value="1" type="checkbox" checked="checked">
                        <?php } else { ?>                              
                            <input name="problemaCirculatorio" id="problemaCirculatorio" value="1" type="checkbox">
                        <?php } ?>
                        Problemas Circulatórios
                    </label><?php echo form_error('problemaCirculatorio') ? : ''; ?></span>
                </div>
            </div>



            <div class="form-group col-md-4">
                <div class="checkbox">
                    <label for="varizes">
                        <?php if ($varizes == "1") { ?>
                            <input name="varizes" id="varizes" type="checkbox" value="1"  checked="checked">
                        <?php } else { ?>                              
                            <input name="varizes" id="varizes" type="checkbox" value="1" >
                        <?php } ?>
                        Varizes
                    </label><?php echo form_error('varizes') ? : ''; ?></span>
                </div>

                <div class="checkbox">
                    <label for="hipertensao">
                        <?php if ($hipertensao == "1") { ?>
                            <input name="hipertensao" id="hipertensao" type="checkbox" value="1"  checked="checked"/>
                        <?php } else { ?>                              
                            <input name="hipertensao" id="hipertensao" type="checkbox" value="1" />
                        <?php } ?>
                        Hipertensão
                    </label><?php echo form_error('hipertensao') ? : ''; ?></span>
                </div>
            </div>

            <div class="form-group col-md-4">
                <div class="checkbox">
                    <label for="fragilidadeCapilar">
                        <?php if ($fragilidadeCapilar == "1") { ?>
                            <input name="fragilidadeCapilar" id="fragilidadeCapilar" type="checkbox" value="1"  checked="checked"/>
                        <?php } else { ?>                              
                            <input name="fragilidadeCapilar" id="fragilidadeCapilar" type="checkbox" value="1" />
                        <?php } ?>
                        Fragilidade Capilar
                    </label><?php echo form_error('fragilidadeCapilar') ? : ''; ?></span>
                </div>

                <div class="checkbox">
                    <label for="hipotensao">
                        <?php if ($hipotensao == "1") { ?>
                            <input name="hipotensao" id="hipotensao" type="checkbox" value="1" checked="checked"/>
                        <?php } else { ?>                              
                            <input name="hipotensao" id="hipotensao" type="checkbox" value="1" />
                        <?php } ?>
                        Hipotensão
                    </label><?php echo form_error('hipotensao') ? : ''; ?></span>
                </div>
            </div>    
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-4">
                <div class="checkbox">
                    <label for="problemaCardiaco">
                        <?php if ($problemaCardiaco == "1") { ?>
                            <input name="problemaCardiaco" id="problemaCardiaco" type="checkbox" value="1"  checked="checked"/>
                        <?php } else { ?>                              
                            <input name="problemaCardiaco" id="problemaCardiaco" type="checkbox" value="1" />
                        <?php } ?>
                        Problemas Cardiacos                       
                    </label><?php echo form_error('problemaCardiaco') ? : ''; ?></span>
                </div>

                <div class="checkbox">
                    <label for="disturbioTireoide ">
                        <?php if ($disturbioTireoide == "1") { ?>
                            <input name="disturbioTireoide" id="disturbioTireoide" type="checkbox" value="1"  checked="checked"/>
                        <?php } else { ?>                              
                            <input name="disturbioTireoide" id="disturbioTireoide" type="checkbox" value="1" />
                        <?php } ?>
                        Disturbios Tireoideanos             
                    </label><?php echo form_error('disturbioTireoide') ? : ''; ?></span>
                </div>
            </div>



            <div class="form-group col-md-4">
                <div class="checkbox">
                    <label for="marcaoPasso ">
                        <?php if ($marcaPasso == "1") { ?>
                            <input name="marcaPasso" id="marcaPasso" type="checkbox" value="1" checked="checked"/>
                        <?php } else { ?>                              
                            <input name="marcaPasso" id="marcaPasso" type="checkbox" value="1" />
                        <?php } ?>
                        Marca Passo                        
                    </label><?php echo form_error('marcaPasso') ? : ''; ?></span>
                </div>

                <div class="checkbox">
                    <label for="diabete ">
                        <?php if ($diabete == "1") { ?>
                            <input name="diabete" id="diabete" type="checkbox" value="1" checked="checked"/>
                        <?php } else { ?>                              
                            <input name="diabete" id="diabete" type="checkbox" value="1"/>
                        <?php } ?>
                        Diabetes                        
                    </label><?php echo form_error('diabete') ? : ''; ?></span>
                </div>
            </div>

            <div class="form-group col-md-4">
                <div class="checkbox">
                    <label for="proteseMetalica ">
                        <?php if ($proteseMetalica == "1") { ?>
                            <input name="proteseMetalica" id="proteseMetalica" type="checkbox" value="1"  checked="checked"/>
                        <?php } else { ?>                              
                            <input name="proteseMetalica" id="proteseMetalica" type="checkbox" value="1" />
                        <?php } ?>
                        Proteses Metálicas
                    </label>
                </div>
            </div>                    

        </div>

        <div class="col-md-12">
            <div class="form-group col-md-4">
                <div class="checkbox">
                    <label for="reposicaoHormonal ">
                        <?php if ($reposicaoHormonal == "1") { ?>
                            <input name="reposicaoHormonal" id="reposicaoHormonal" type="checkbox" value="1"  checked="checked"/>
                        <?php } else { ?>                              
                            <input name="reposicaoHormonal" id="reposicaoHormonal" type="checkbox" value="1" />
                        <?php } ?>
                        Reposição Hormonal
                    </label>
                </div>


            </div>



            <div class="form-group col-md-4">
                <label for="tpm ">
                    <?php if ($tpm == "1") { ?>
                        <input name="tpm" id="tpm" type="checkbox" checked="checked" value="1" />
                    <?php } else { ?>                              
                        <input name="tpm" id="tpm" type="checkbox" value="1" />
                    <?php } ?>
                    TMP
                </label>
            </div>


            <div class="form-group col-md-4">
                <label for="diu ">
                    <?php if ($diu == "1") { ?>
                        <input name="diu" id="diu" type="checkbox" checked="checked" value="1" />
                    <?php } else { ?>                              
                        <input name="diu" id="diu" type="checkbox" value="1" />
                    <?php } ?>
                    DIU
                </label>
            </div>
        </div> 
    </div>



    <!--radio-->
    <div class="form-group col-md-12">
        <div class="radio col-md-4">
            <label for="REGULAR">
                <?php if ($menstruacao == "REGULAR") { ?>
                    <input name="menstruacao" id="REGULAR" value="REGULAR" checked  type="radio"/>
                <?php } else { ?>   
                    <input name="menstruacao" id="REGULAR" value="REGULAR" type="radio"/>
                <?php } ?>
                Ciclo Menstrual Regular
            </label>
        </div>
        <div class="radio col-md-4">
            <label for="IRREGULAR">
                <?php if ($menstruacao == "IRREGULAR") { ?>
                    <input name="menstruacao" id="IRREGULAR" value="IRREGULAR" checked type="radio"/>
                <?php } else { ?>   
                    <input name="menstruacao" id="IRREGULAR" value="IRREGULAR" type="radio"/>
                <?php } ?>
                Ciclo Menstrual Irregular
            </label>
        </div>
        <div class="radio col-md-4">
            <label for="MENOPAUSA">
                <?php if ($menstruacao == "MENOPAUSA") { ?>
                    <input name="menstruacao" id="MENOPAUSA" value="MENOPAUSA" checked type="radio"/>
                <?php } else { ?>   
                    <input name="menstruacao" id="MENOPAUSA" value="MENOPAUSA" type="radio"/>
                <?php } ?>
                Menopausa
            </label>
        </div>
    </div>
    <!--endRadio--> 

    <div class="col-md-12">
        <div class="form-group col-md-8">
            <label for="anticoncepcional" class="">Anticoncepcional:</label>
            <div class="">
                <input class="form-control" name="anticoncepcional"
                       id="anticoncepcional" placeholder=""
                       type="text" 
                       value="<?= set_value('anticoncepcional') ? : (isset($anticoncepcional) ? $anticoncepcional : ''); ?>"/>
            </div>
        </div>

        <div class="form-group col-md-4">
            <label for="dataInicioAnticoncepcional">Desde(Anticoncepcional):</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input name="dataInicioAnticoncepcional" id="dataInicioAnticoncepcional" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text"
                       value="<?= set_value('dataInicioAnticoncepcional') ? : (isset($dataInicioAnticoncepcional) ? $dataInicioAnticoncepcional : ''); ?>"/>
            </div><!-- /.input group -->
        </div>

        <div class="form-group col-md-4">
            <label for="dataUltimaMenstruacao">Última Menstruação</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input name="dataUltimaMenstruacao" id="dataUltimaMenstruacao" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text"
                       value="<?= set_value('dataUltimaMenstruacao') ? : (isset($dataUltimaMenstruacao) ? $dataUltimaMenstruacao : ''); ?>"/>

            </div><!-- /.input group -->
        </div>

        <div class="form-group col-md-4">
            <label for="quantidadeGestacao" class="">Quantidade de Gestações</label>
            <div class="">
                <input class="form-control" name="quantidadeGestacao" id="quantidadeGestacao" placeholder="" type="text"
                       value="<?= set_value('quantidadeGestacao') ? : (isset($quantidadeGestacao) ? $quantidadeGestacao : ''); ?>"/>
            </div>
        </div>

        <div class="form-group col-md-4">
            <label for="dataUltimaGestacao">Última Gestação</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input name="dataUltimaGestacao" id="dataUltimaGestacao"
                       class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text"
                       value="<?= set_value('dataUltimaGestacao') ? : (isset($dataUltimaGestacao) ? $dataUltimaGestacao : ''); ?>"/>

            </div><!-- /.input group -->
        </div>



    </div>                          

    <div class="form-group col-md-12">
        <div class="form-group col-md-4">
            <label for="quantidadeCigarro" class="">Quantidade Cigarros</label>
            <div class="">
                <input class="form-control" id="quantidadeCigarro" name="quantidadeCigarro" placeholder="" type="text"
                       value="<?= set_value('quantidadeCigarro') ? : (isset($quantidadeCigarro) ? $quantidadeCigarro : ''); ?>"/>
            </div>
        </div>

    </div>
    <div class="form-group col-md-12">
        <div class="form-group col-md-6">
            <label for="quantidadeBebidaAlcoolica" class="col-sm-4">Quantidade Bebida Alcoólica</label>
            <div class="col-sm-4">
                <input class="form-control" name="quantidadeBebidaAlcoolica"id="quantidadeBebidaAlcoolica" placeholder="" type="text"
                       value="<?= set_value('quantidadeBebidaAlcoolica') ? : (isset($quantidadeBebidaAlcoolica) ? $quantidadeBebidaAlcoolica : ''); ?>"/>
            </div>
            <label for="quantidadeBebidaAlcoolica" class="col-sm-4">(x/semana)</label>
        </div>
        <div class="form-group col-md-6">
            <label for="descricaoBebidaAlcoolica" class="col-sm-4">Qual Bebida</label>
            <div class="col-sm-8">
                <input class="form-control" name="descricaoBebidaAlcoolica"
                       id="descricaoBebidaAlcoolica" placeholder="" type="text"
                       value="<?= set_value('descricaoBebidaAlcoolica') ? : (isset($descricaoBebidaAlcoolica) ? $descricaoBebidaAlcoolica : ''); ?>"/>
            </div>

        </div>
    </div>



    <div class="col-md-12">

        <div class="form-group col-md-6">
            <label for="quantidadeAtividadeFisica" class="col-sm-4">Quantidade de Atividade Física</label>
            <div class="col-sm-4">
                <input class="form-control" name="quantidadeAtividadeFisica" id="quantidadeAtividadeFisica" placeholder="" type="text"
                       value="<?= set_value('quantidadeAtividadeFisica') ? : (isset($quantidadeAtividadeFisica) ? $quantidadeAtividadeFisica : ''); ?>"/>

            </div>
            <label for="quantidadeAtividadeFisica" class="col-sm-4">(x/semana)</label>
        </div>
    </div>

    <div class="col-md-12">	
        <div class="form-group col-md-6">
            <label for="quantidadeIngestaoLiquido" class="col-sm-4">Ingestão de Líquidos</label>
            <div class="col-sm-4">
                <input class="form-control" name="quantidadeIngestaoLiquido"
                       id="quantidadeIngestaoLiquido" placeholder="" type="text"
                       value="<?= set_value('quantidadeIngestaoLiquido') ? : (isset($quantidadeIngestaoLiquido) ? $quantidadeIngestaoLiquido : ''); ?>"/>
            </div>
            <label for="quantidadeIngestaoLiquido" class="col-sm-4">(X litros/dia)</label>
        </div>
    </div>  

    <div class="col-md-12">
        <div class="form-group col-md-4">
            <div class="checkbox">
                <label for="prisaoDeVentre">
                    <?php if ($prisaoDeVentre == "1") { ?>
                        <input name="prisaoDeVentre" id="prisaoDeVentre" type="checkbox" value="1" checked="checked"/>
                    <?php } else { ?>                              
                        <input name="prisaoDeVentre" id="prisaoDeVentre" type="checkbox" value="1" />
                    <?php } ?>
                    Prisão de Ventre
                </label>
            </div>
        </div>                   
        <div class="form-group col-md-4">
            <div class="checkbox">
                <label for="dificuldadeUrinar">
                    <?php if ($dificuldadeUrinar == "1") { ?>
                        <input name="dificuldadeUrinar" id="dificuldadeUrinar" type="checkbox" value="1" checked="checked"/>
                    <?php } else { ?>                              
                        <input name="dificuldadeUrinar" id="dificuldadeUrinar" type="checkbox" value="1" />
                    <?php } ?>
                    Dificuldade de Urinar
                </label>
            </div>
        </div>

        <div class="form-group col-md-4">
            <div class="checkbox">
                <label for="usaRoupaApertada">
                    <?php if ($usaRoupaApertada == "1") { ?>
                        <input name="usaRoupaApertada" id="usaRoupaApertada" type="checkbox" value="1" checked="checked"/>
                    <?php } else { ?>                              
                        <input name="usaRoupaApertada" id="usaRoupaApertada" type="checkbox" value="1" />
                    <?php } ?>
                    Roupas Apertadas
                </label>
            </div>
        </div> 

        <div class="form-group col-md-12">
            <label for="posicaoDuranteTrabalho">Posição durante o trabalho</label>
            <textarea name="posicaoDuranteTrabalho" id="posicaoDuranteTrabalho"
                      class="form-control" rows="3" placeholder="Enter ..."><?= set_value('posicaoDuranteTrabalho') ? : (isset($posicaoDuranteTrabalho) ? $posicaoDuranteTrabalho : ''); ?></textarea>
        </div>
    </div>						
    <!-- /.box-body -->

    <div class="box-footer text-right">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
    <?= form_close(); ?>
    <!-- Your Page Content Here -->

    <!-- Main Footer -->
</div>
<!-- Custom tabs (Charts with tabs)-->
<div class="nav-tabs-custom">
    <!-- Tabs within a box -->
    <ul class="nav nav-tabs pull-right">

        <li class="pull-left header"> Dados Complementares</li>

        <li><a href="#3" data-toggle="tab">Outros Dados Complementares</a></li>
        <li><a href="#2" data-toggle="tab">Cirurgias</a></li>
        <li class="active"><a href="#1" data-toggle="tab">Alergias</a></li>


    </ul>
    <div class="tab-content no-padding">
        <?php
        $alergias = $this->m_alergia->get(null, $idCliente);
        $cirurgias = $this->m_cirurgia->get(null, $idCliente);
        $outros = $this->m_dadoperfil->get(null, $idCliente);
        ?>

        <!-- Morris chart - Sales -->
        <div class="chart tab-pane active" id="1" style="position: relative;">
            <div class="box">
                <div class="box-header">
                    <div class="col-md-12">
                        <h3 class="box-title col-md-2">Lista de Alergias</h3>
                        <?= form_open('cliente/createAlergia') ?>
                        <div class="form-group col-md-8 text-right">
                            <input type='hidden' name="idCliente" value="<?= set_value('idCliente') ? : (isset($idCliente) ? $idCliente : ''); ?>">
                            <label for="descricaoDadoComplementar">Alergia</label><span class="erro"><?php echo form_error('descricaoDadoComplementar') ? : ''; ?></span>
                            <input type="text" name="descricaoDadoComplementar" id="descricaoDadoComplementar" class="form-group"/>
                            <label for="tempoAlergia">Tempo Alergia</label><span class="erro"><?php echo form_error('tempoAlergia') ? : ''; ?></span>
                            <input type="text" class="form-group" name="tempoAlergia" id="tempoAlergia"/>

                        </div>
                        <button type="submit" class="btn btn-default pull-right col-md-2"><i class="fa fa-plus"></i> Nova Alergia</button>
                        <?= form_close(); ?>
                    </div><!-- /.box-header -->
                </div>
                <div class="box-body">

                    <?php if ($alergias > 0): ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Alergia</th>
                                    <th>Desde</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($alergias->result() as $cadastro): ?>
                                    <tr >
                                        <td ><?= $cadastro->idDadoComplementar ?></td>
                                        <td ><?= $cadastro->descricaoDadoComplementar ?></td>
                                        <td ><?= $cadastro->tempoAlergia ?></td>
                                        <td >
                                            <a href="#" class='confirma_exclusao' data-id="<?= $cadastro->idDadoComplementar ?>" /><i class="fa fa-trash-o"></i></a>
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

        </div>


        <div class="chart tab-pane" id="2" style="position: relative;">



            <div class="box">
                <div class="box-header">
                    <div class="col-md-12">
                        <h3 class="box-title col-md-2">Lista de Cirurgias</h3>
                        <?= form_open('cliente/createCirurgia') ?>
                        <div class="form-group col-md-8 text-right">
                            <input type='hidden' name="idCliente" value="<?= set_value('idCliente') ? : (isset($idCliente) ? $idCliente : ''); ?>">

                            <label for="descricaoDadoComplementar">Cirurgia</label><span class="erro"><?php echo form_error('descricaoDadoComplementar') ? : ''; ?></span>
                            <input type="text" name="descricaoDadoComplementar" id="descricaoDadoComplementar" class="form-group"/>
                            <label for="tempoCirurgia">Tempo Cirurgia</label><span class="erro"><?php echo form_error('tempoCirurgia') ? : ''; ?></span>
                            <input type="text" class="form-group" name="tempoCirurgia" id="tempoCirurgia"/>

                        </div>
                        <button type="submit" class="btn btn-default pull-right col-md-2"><i class="fa fa-plus"></i> Nova Cirurgia</button>
                        <?= form_close(); ?>
                    </div><!-- /.box-header -->
                </div>
                <div class="box-body">

                    <?php if ($cirurgias > 0): ?>
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cirurgia</th>
                                    <th>Desde</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cirurgias->result() as $cadastro): ?>
                                    <tr >
                                        <td ><?= $cadastro->idDadoComplementar ?></td>
                                        <td ><?= $cadastro->descricaoDadoComplementar ?></td>
                                        <td ><?= $cadastro->tempoCirurgia ?></td>
                                        <td >
                                            <a href="#" class='confirma_exclusao' data-id="<?= $cadastro->idDadoComplementar ?>" /><i class="fa fa-trash-o"></i></a>
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



        </div>


        <div class="chart tab-pane " id="3" style="position: relative;">



            <div class="box">
                <div class="box-header">
                    <div class="col-md-12">
                        <h3 class="box-title col-md-2">Lista de Dados Complementares</h3>
                        <?= form_open('cliente/createDadoPerfil') ?>
                        <div class="form-group col-md-8 text-right">
                            <input type='hidden' name="idCliente" value="<?= set_value('idCliente') ? : (isset($idCliente) ? $idCliente : ''); ?>">

                            <label for="descricaoDadoComplementar">Observação Complementar</label><span class="erro"><?php echo form_error('descricaoDadoComplementar') ? : ''; ?></span>
                            <input type="text" name="descricaoDadoComplementar" id="descricaoDadoComplementar" class="form-group"/>

                        </div>
                        <button type="submit" class="btn btn-default pull-right col-md-2"><i class="fa fa-plus"></i> Nova Alergia</button>
                        <?= form_close(); ?>
                    </div><!-- /.box-header -->
                </div>
                <div class="box-body">

                    <?php if ($outros > 0): ?>
                        <table id="example3" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Descrição Observação Complentar</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($outros->result() as $cadastro): ?>
                                    <tr >
                                        <td ><?= $cadastro->idDadoComplementar ?></td>
                                        <td ><?= $cadastro->descricaoDadoComplementar ?></td>
                                        <td >
                                            <a href="#" class='confirma_exclusao' data-id="<?= $cadastro->idDadoComplementar ?>" /><i class="fa fa-trash-o"></i></a>
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
        </div>
    </div><!-- /.nav-tabs-custom -->
</div>
