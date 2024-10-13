<?php
if(!empty($_POST["ingresar"])){
    if (empty($_POST["Correo"]) or empty($_POST["clave"])) {
        echo "Los campos estan vacios";
    } else {
        $email = $_POST("Correo");
        $clave = $_POST("clave");
        $sql = $conexionDatos->query("select correo, contraseña from usuarios where correo =$email and contraseña=$clave");
        if ($datos = $sql->fetch_object()) {
            header("location: index.html");
        } else {
            echo "Acceso denegado";
        }
        
    }
    
}
?>