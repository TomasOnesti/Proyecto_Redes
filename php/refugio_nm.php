<?php
$conexionDatos = new mysqli('localhost', 'phpmyadmin', 'RedesInformaticas', 'tonesti');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Souls</title>
    <link rel="stylesheet" href="../CSS/lugares.css">
</head>
<body class="fondo_ref">
<header>
        <?php
        $Titulo = "SELECT  `Titulo` FROM `ubicaciones` WHERE Id = 1";
        $Resul_Titulo = $conexionDatos->query($Titulo);
        if($Resul_Titulo->num_rows > 0){
            while($Filas = $Resul_Titulo->fetch_array()){
                echo "<h1 class=\"refugio\">".$Filas[0]."</h1>";
            }
        }
        ?>
</header>

<main>
    <?php
        $img ="SELECT img FROM ubicaciones WHERE Id = 1";
        $descripcion="SELECT Descripcion FROM ubicaciones WHERE Id = 1";
        $Result_img = $conexionDatos->query($img);
        if($Result_img->num_rows > 0){
            while($Filas = $Result_img->fetch_array()){
                echo "<div class=\"fondito posicion posicion_img borde\">
                            <img class=\"img \" src=\"../Img/" . $Filas["img"] . "\">
                      </div>";
            }
        }

        $Result_Descripcion = $conexionDatos->query($descripcion);
        if($Result_Descripcion->num_rows > 0){
            while($Filas = $Result_Descripcion->fetch_array()){
                echo "<div class=\"fondito posicion_text borde\" >
                <h2 class=\"descripcion \">Descripcion:</h2>
                <p class=\"descripcion\">".$Filas[0]."</p></div>";
            }
        }

    ?>

        <h2 class="descripcion">Objetos</h2>
</main>

<footer>

</footer>
</body>
</html>