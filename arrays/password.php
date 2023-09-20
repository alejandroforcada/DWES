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



function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){

    for ($i=0;$i<$upper;$i++){
        $password[]=chr(rand(65,90));
    }
    for ($i=0;$i<$lower;$i++){
        $password[]=chr(rand(97,122));
    }
    for ($i=0;$i<$numeric;$i++){
        $password[]=chr(rand(48,57));
    }
    for ($i=0;$i<$other;$i++){
        $password[]=chr(rand(33,47));
    }

    shuffle($password);

    echo(implode($password));

}




echo (rand_Pass())


?>
    
</body>
</html>