<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Estilo_formulario.css">
</head>
<body>
<?php

if(!empty($_POST["registro"])) {
    if(empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["clave"])) {
       echo "Uno de los campos esta vacio"; 
    } else {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $clave = $_POST["clave"];

        $sql=$conexionDatos->query("insert into usuarios(Nombre_usuario, correo, contraseña) values('$nombre','$correo','$clave')");
        if ($sql == 1) {
            echo "Usuario registrado";
        } else {
            echo "Usuario no registrado";
        }
        
    }
}
?>    
</body>
</html>