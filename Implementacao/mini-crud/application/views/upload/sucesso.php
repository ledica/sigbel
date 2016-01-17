<html>
<head>
<title>Sucesso!</title>
</head>
<body>
  
<ul>
  
<?php foreach ($arquivo_data as $item => $valor) {?>
        <li><?php echo $item;?>: <?php echo $valor;?></li>
<?php } ?>
  
</ul>
  
<p><?php echo anchor('upload', 'Enviar outro arquivo!'); ?></p>
  
</body>
</html>