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
    
    $array=["Seguro", "que", "apruebo", "esta", "asignatura"];
   
    
    for($i=1;$i<count($array);$i++){

        $detras=implode(' ',array_slice($array,$i));
        $delante= implode(' ',array_slice($array,0,$i));

       $arraySeparado[]=[$delante,$detras];
    
    }

  print_r($arraySeparado);



    ?>
</body>
</html>