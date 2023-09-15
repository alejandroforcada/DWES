<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    $nombre= $_GET['x'] ?? 'Alejandro';
    $prefijo= $_GET['y'] ?? 'Alejandro';

    $nombreacortado= trim($nombre,'/');

    echo $nombreacortado;


    echo "<br/>";

    echo "<br/>";


    $cadenaLarga =strlen($nombre);

    echo $cadenaLarga;


    echo "<br/>";

    echo "<br/>";

    $cadenaMayusculas= strtoupper($nombre);

    echo $cadenaMayusculas;


    echo "<br/>";

    echo "<br/>";

    $cadenaMinusculas= strtolower($nombre);

    echo $cadenaMinusculas;



    echo "<br/>";

    echo "<br/>";

    $cadenaprefijo= strpos($nombreacortado,$prefijo);
    
    print($cadenaprefijo === false ? 'NO tiene prefijo' : 'Sí tiene prefijo');

    

    echo "<br/>";

    echo "<br/>";

    $mayusculas= substr_count($cadenaMayusculas,'A');
      
    
    echo($mayusculas);

    echo "<br/>";

    echo "<br/>";

    $posicionA=strpos($cadenaMayusculas,'A');

   print($posicionA ===false ? 'No tiene a' :  $posicionA);

   echo "<br/>";

   echo "<br/>";

   $remplazoO=str_ireplace('O','0',$nombreacortado);

   echo $remplazoO;




    ?>
</body>
</html>