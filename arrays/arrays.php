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
    $nombres= array('Laura','Alejandro','Rodolfo','Miguel','Julian');
    $nombres2=$nombres;

    $contar=count($nombres);

    echo ($contar);


    echo "<br/>";
    echo "<br/>";

    $juntos=implode(' ',$nombres);

    echo ($juntos);

    echo "<br/>";
    echo "<br/>";

    asort($nombres);

    print_r($nombres);


    echo "<br/>";
    echo "<br/>";

    $nombresInvertido=array_reverse($nombres2);

    print_r($nombresInvertido);


    echo "<br/>";
    echo "<br/>";

    $miNombrePosicion=array_search('Alejandro',$nombres2);

    echo ($miNombrePosicion);

    echo "<br/>";
    echo "<br/>";

    $alumnos=  [['id'=>'1','Nombre'=>'Laura','edad'=>'23'],
                ['id'=>'2','Nombre'=>'Alejandro','edad'=>'27'],
                ['id'=>'3','Nombre'=>'Rodolfo','edad'=>'19'],
                ['id'=>'4','Nombre'=>'Miguel','edad'=>'40'],
                ['id'=>'5','Nombre'=>'Julian','edad'=>'21']];

    print_r($alumnos);


    echo "<br/>";
    echo "<br/>";
    ?>
    <table>
    <?php  
        foreach ($alumnos as $alumno){
            ?>  <tr><?php
                    foreach ($alumno as $dato){
                        ?> <td> <?php echo ($dato) ?> </td><?php
                    }
                ?></tr>

            <?php }


    ?>
    </table>
    <?php  
    
    echo "<br/>";
    echo "<br/>";

    $nombrealumnos=array_column($alumnos,"Nombre");

    print_r($nombrealumnos);


    echo "<br/>";
    echo "<br/>";

    $numeros=array(1,2,3,4,5,6,7,8,9,10);

    echo (array_sum($numeros));
    ?>

    
  

</body>
</html>