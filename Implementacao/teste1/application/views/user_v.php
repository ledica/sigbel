<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo $titulo; ?></title>
        <meta charset="iso-8859-1" />
        <link type="text/css" rel="stylesheet"
              href="<?php echo base_url(); ?>css/estilo.css"/>
    </head>
    <body>
        <!-- abre o formulário de cadastro -->
        <?php echo form_open('User/cadastrar', 'id="form-pessoas"'); ?>
        <label for="nome">Nome:</label><br/>
        <input type="text" name="nome" value="<?php echo set_value('nome'); ?>"/>
        <div class="error"><?php echo form_error('nome'); ?></div>
        <label for="email">Email:</label><br/>
        <input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
        <div class="error"><?php echo form_error('email'); ?></div>
        <input type="submit" name="cadastrar" value="Cadastrar" />
        <?php echo form_close(); ?>
        <!-- fecha o formulário de cadastro -->

        <!-- start lista de registros -->
        <ul>
            <?php foreach ($users as $user): ?>
                <li>
                    <a title="deletar" href="<?php echo base_url() . 'pessoas/deletar/' . $user->id; ?>" onclick="return confirm('Confirma a exclusão deste registro?')">[X]</a>
                    <span> - </span>
                    <a title="alterar" href="<?php echo base_url() . 'pessoas/editar/' . $user->id; ?>"><?php echo $user->nome; ?></a>
                    <span> - </span>
                    <span><?php echo $user->email; ?></span>
                </li>
            <?php endforeach ?>
        </ul>
        <!-- end lista de registros -->
    </body>
</html>