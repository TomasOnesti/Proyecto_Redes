<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Estilo_formulario.css">
</head>
<body id="fondo">
    <header>
        <h1>Bienvenido, Porfavor registrese</h1>
    </header>
    <main>
        <article>
            <form action="" method="POST">
        <?php
                include ("conexion.php");
                include ("controlar_registro.php");
                ?>
            <div class="Registro">
                <h4>Formulario De Registro</h4>
                <input class="control" type="text" name="nombre" id="nombres" placeholder="Ingrese su Nombre">
                <input class="control" type="email" name="correo" id="correos" placeholder="Ingrese su Correo Electronico">
                <input class="control" type="password" name="clave" id="claves" placeholder="Ingrese su Contraseña">
                <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
                <input class="boton" type="submit" value="Registrar" name="registro">
                <p><a href="./inicio.php">¿Posees una cuenta?</a></p>
            </div>
            </form>
        </article>
    </main>
</body>
</html>