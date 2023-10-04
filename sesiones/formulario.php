<?php 
require('conexion.php');

$errorPass = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'] ;
    $email= $_POST['email'] ;
    $contraseña= $_POST['contraseña'] ;
    $confirmar= $_POST['confirmar'] ;

    if($contraseña==$confirmar){
        $pdoSt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
        $pdoSt->bindParam(1, $nombre);
        $pdoSt->bindParam(2, $email);
        $pdoSt->bindParam(3, $contraseña);
        $pdoSt->execute();}

    else{
        $errorPass = "Las contraseñas no coinciden";
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
            Email: <input type='email' name='email'/>
            <br><br>
            Contraseña:<input type="password" name="contraseña" />
            <br><br>
            Confirma la contraseña:<input type="password" name="confirmar" />
            <?php echo $errorPass. " "?>
            <input type="submit" name="submit" value="Registrarse"/>
        </form>
    </body>
</html>