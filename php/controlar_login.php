<?php
if(!empty($_POST["ingresar"])){
    if (empty($_POST["Correo"]) or empty($_POST["clave"])) {
        echo "<div class=\"alerta\"> Los Campos Estan Vacios</div>";
    } else {
        $email = $_POST("Correo");
        $clave = $_POST("clave");
        $sql = $conexionDatos->query("select correo, contraseña from usuarios where correo =$email and contraseña=$clave");
        if ($datos = $sql->fetch_object()) {
            header("location: index.html");
        } else {
            echo "<div class=\"alerta\">Accseso Denegado</div>";
        }
        
    }
    
}
?>