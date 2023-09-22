<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="estilos.css">
  <?php 
    $variable= $_GET['modo'] ??($_COOKIE["modo"] ?? 'light');

    setcookie("modo",$variable,time()+30*24*60*60);
       
    ?>

</head>
<body class="<?= $variable ?>">
    <a href="http://localhost:8000/cookies/index.php?modo=light">claro</a>
    <a href="http://localhost:8000/cookies/index.php?modo=dark">oscuro</a>
</body>
</html>