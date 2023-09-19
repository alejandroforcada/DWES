<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $peliculas=['El señor de los anillos'=> 'Fantasía de la Tierra Media','Star Wars'=> 'Ciencia ficción', 'El Padrino'=>'Muchos mafiosos pegandose de tiros y leches'];
   
   
    function descripcionesTamaño($primeraDescripcion, $segundaDescripcion)
    {
        return strlen($primeraDescripcion)- strlen($segundaDescripcion);
   
    }
   
   
    uasort($peliculas,"descripcionesTamaño");

    print_r($peliculas);


    ?>
    
</body>
</html>