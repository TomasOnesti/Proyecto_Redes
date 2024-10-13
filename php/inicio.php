<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro</title>
    <link rel="stylesheet" href="../CSS/Estilo_formulario.css">
</head>
<body id="fondo">
    <header>
        <h1>Bienvenido</h1>
    </header>
    <main>
        <article>
            <form action="" method="post">
            <?php
            include ("conexion.php");
            include ("controlar_login.php");
            ?>
            <div class="Registro">
                <h4>Inicio De Sesion</h4>
                <input class="control" type="email" name="Correo" id="correos" placeholder="Ingrese su Correo Electronico">
                <input class="control" type="password" name="clave" id="claves" placeholder="Ingrese su Contraseña">
                <input class="boton" type="submit" value="Iniciar Sesion" name="ingresar">
                <p><a href="./registro.php">¿No tiene cuenta?</a></p>
            </div>
            </form>
        </article>
    </main>
</body>
</html>