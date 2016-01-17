<html>
<head>
<title>Formul&aacute;rio de Envio de Arquivo</title>
</head>
<body>
        <?php echo form_open_multipart('upload/enviar'); ?>
        <input type="file" name="arquivo" id="arquivo" size="20" />
        <br>
        <input type="submit" value="Enviar" />
</body>
</html>