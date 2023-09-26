<?php 

$idioma=$_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'es';

$idioma=substr($idioma,0,2);


?>



<!DOCTYPE html>
<html lang='<?=$idioma?>'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if ($idioma=='es'):?>
    <p>bienvenido</p>
    <?php endif ?>

    <?php if ($idioma=='en'):?>
    <p>welcome</p>
    <?php endif ?>
    
</body>
</html>