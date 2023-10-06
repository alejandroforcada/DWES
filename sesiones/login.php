<?php
require('conexion.php');

session_start();

$errorPass = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'] ;
    $contraseña= $_POST['contraseña'] ;

        $pdoSt = $pdo->prepare('SELECT username FROM users WHERE password=? AND username=?');
        $pdoSt->bindParam(1, $contraseña);
        $pdoSt->bindParam(2, $nombre);
        $pdoSt->execute();
    
        $registro=$pdoSt->fetch();

        if($registro){
            $_SESSION['username']=$nombre;
            header('location:privada.php');
        }
        else{
            $errorPass='usuario no encontrado';
        }       
    }     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post" enctype="multipart/form-data">
        Nombre Usuario:<input type='text' name='nombre' />
        <br><br>
        Contraseña:<input type="password" name="contraseña" />
        <br><br>
        <?php echo $errorPass. " "?>
        <input type="submit" name="submit" value="Registrarse"/>
    </form>    
    <a href='formulario.php'>Resgistrarse</a>
    <a href='logout.php'>Logout</a>
</body>
</html>