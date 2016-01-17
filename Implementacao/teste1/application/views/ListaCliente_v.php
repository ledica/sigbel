<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Lista de Clientes</h3>
                        <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Novo Cliente</button>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome </th>
                                    <th>RG</th>
                                    <th>CPF</th>
                                    <th>Telefone</th>
                                    <th>Operação</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                foreach ($clientes as $row){ ?>
                                <tr>
                                    <td><?php echo $row['idCliente'];?></td>
                                    <td><?php echo $row['nomeCliente'];?></td>
                                    <td><?php echo $row['numeroRG'];?> </td>
                                    <td><?php echo $row['numeroCPF'];?></td>
                                    <td><?php echo $row['telefone'];?></td>
                                    <td>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>      

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>RG</th>
                                    <th>CPF</th>
                                    <th>TELEFONE</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
