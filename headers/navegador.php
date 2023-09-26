<?php 

$navegador=$_SERVER['HTTP_USER_AGENT'] ;

?>



<!DOCTYPE html>
<html lang='<?=$idioma?>'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if (strpos($navegador,'Firefox')==false):?>
    <p>error 404</p>
    <?php else :?>
    <p>bienvenido</p>
    <?php endif ?>
    
</body>
</html>