<?php 
$dejameEntrar=$_GET['letMeIn']?? '0';
$nombreImagen=$_GET['nombreImagen']?? 'hola.png';
header('Content-Type: image/png');
if($dejameEntrar =='1'){
    if (file_exists("/home/alumno/Escritorio/DWES/img_Actividad_Imagen/$nombreImagen")){        
        imagepng(imagecreatefrompng("/home/alumno/Escritorio/DWES/img_Actividad_Imagen/$nombreImagen"));
    }
    else{
        http_response_code(404);
        imagepng(imagecreatefrompng("/home/alumno/Escritorio/DWES/img_Actividad_Imagen/error.png"));

    }

}
else{
    http_response_code(401);
    imagepng(imagecreatefrompng("/home/alumno/Escritorio/DWES/img_Actividad_Imagen/error.png"));
}


?>