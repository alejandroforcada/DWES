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

    if (isset($_GET['y'])){


    $prefijo=$_GET['y'];
    $cadenaprefijo= strpos($nombreacortado,$prefijo,0);
    
    print($cadenaprefijo === 0 ? 'Si tiene prefijo' : 'No tiene prefijo');}

    

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

   echo "<br/>";

   echo "<br/>";


   $url = 'http://username:password@hostname:9090/path?arg=value';

   echo (parse_url($url, PHP_URL_SCHEME));
   echo "<br/>";

   echo(parse_url($url, PHP_URL_USER));
   echo "<br/>";
   echo(parse_url($url,PHP_URL_PATH));
   echo "<br/>";
   echo(parse_url($url, PHP_URL_QUERY));


    ?>
</body>
</html>