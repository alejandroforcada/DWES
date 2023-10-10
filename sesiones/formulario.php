<?php 
require('conexion.php');

$errores=[];

$nombre= $email= "";

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

        try{
        $pdoSt->execute();}

        catch(PDOException $e){
        $error=$e->getMessage();
        if (strpos($error,"users.username")){
            $falloUsuario="EL usuario ya existe";
        }
        $errores[]=$falloUsuario;
        
    }
}
    else{
        $errores[]="las contraseñas no coinciden";
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

            Nombre Usuario:<input type='text' name='nombre' value="<?= $nombre ?>"/>
            <br><br>
            Email: <input type='email' name='email' value="<?= $email ?>"/>
            <br><br>
            Contraseña:<input type="password" name="contraseña" />
            <br><br>
            Confirma la contraseña:<input type="password" name="confirmar" />
            <?php if (count($errores)){foreach ($errores AS $fallo){
                            echo $fallo;
            }}

            ?>
            <input type="submit" name="submit" value="Registrarse"/>
        </form>
        <a href='login.php'>Login</a>
        <a href='logout.php'>Logout</a>
       
    </body>
</html>