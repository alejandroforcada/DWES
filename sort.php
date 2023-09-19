<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function scriptOrdenar($variable){
        $nombresAsc=$variable;
        $edadesAsc=$variable;
        $nombresDesc=$variable;
        $edadesDesc=$variable;
        asort($edadesAsc);
        ksort($nombresAsc);
        arsort($edadesDesc);
        krsort($nombresDesc);


        print_r($nombresAsc);
        echo "<br>";
        print_r($edadesAsc);
        echo "<br>";
        print_r($nombresDesc);
        echo "<br>";
        print_r($edadesDesc);
        echo "<br>";
    }
    
    $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

    scriptOrdenar($edades);
    
    ?>
    
</body>
</html>