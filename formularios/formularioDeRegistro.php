
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Formulario subida de archivos</h2>

<html>

<body>

<form action="formulario.php" method="post" enctype="multipart/form-data">

    <input type='text' name='nombre' />

    <input type='email' name='email'/>


    <input type="file" name="imagen" />

    <select name="educacion">

<option value="sin-estudios">Sin estudios</option>

<option value="educacion-obligatoria">Educación Obligatoria</option>

<option value="formacion-profesional">Formación profesional</option>

<option value="universidad">Universidad</option>

</select> <br>

    <input type="submit" name="submit" />

</form>

</body>

</html>
    
</body>
</html>