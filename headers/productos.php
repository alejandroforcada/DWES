<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

$id=$_GET['id']??'';
$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"]; 

if (array_key_exists($id,$productos)){

    echo ($productos[$id]);

}
else{
    http_response_code(404);
}

?>


    
</body>
</html>