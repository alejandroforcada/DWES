<?php 
$pagina=$_GET['dejameEntrar']?? '1';
if ($pagina=='0'){
header('Location: login.php');
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Bienvenido</p>

    
</body>
</html>