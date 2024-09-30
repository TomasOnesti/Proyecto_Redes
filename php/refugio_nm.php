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
                echo "<div class=\"fondito\">
                            <img class=\"img\" src=\"../Img/" . $Filas["img"] . "\">
                      </div>";
            }
        }

        $Result_Descripcion = $conexionDatos->query($img);
        if($Result_Descripcion->num_rows > 0){
            while($Filas = $Result_Descripcion->fetch_array()){
                
            }
        }
    ?>
</main>

<footer>

</footer>
</body>
</html>