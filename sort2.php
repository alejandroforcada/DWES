<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $temperaturas="1,2,3,4,5,6,7,8,9,10,11,12,14,13,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30";

    $temperaturasArray=explode(',',$temperaturas);

    $cuentaTemperaturas=count($temperaturasArray);

    $sumaTemperaturas= array_sum($temperaturasArray);

    echo($sumaTemperaturas/$cuentaTemperaturas);

    echo "<br>";

    echo ("temperaturas mínimas");

    echo "<br>";

    asort($temperaturasArray);

    for($i=0;$i<5;$i++){

        echo($temperaturasArray[$i]." ");
    }

    echo "<br>";

    echo ("temperaturas máximas");

    echo "<br>";

    for($i =($cuentaTemperaturas-1);$i>($cuentaTemperaturas-6);$i--){

        echo($temperaturasArray[$i]." ");
    }


    
    
    
    ?>
    
</body>
</html>