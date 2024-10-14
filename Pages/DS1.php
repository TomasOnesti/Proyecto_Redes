<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Estilos.css">
    <link rel="stylesheet" href="../CSS/lugares.css">
</head>
    <?php
    $conexionDatos = new mysqli('localhost', 'root', '', 'tonesti');
    $conexionDatos->set_charset("utf8")
    ?>
<body id="cuarto_fondo">
    <header>
        <a href="../index.html"><img class="Logo" src="../Img/Back_Button.png" alt="Volver"></a>
        <h1 class="Principal">DarkSouls</h1>
    </header>

    <main>
        <div class="fondo">
            <h2 class="paginas_titulo">La guia de Dark Souls en donde podras ver informacion de  Armas, Armaduras, Hechizos y Milagros. Tambien veremos como vencer a todos los jefes y enemigos del juego.</h2>
        </div>
        <article>
            <div class="header">
                <ul class="nav">
                 <!-- <li>
                     <a href="">Jugador</a>
                     <ul>
                         <li><a href="">Arma</a></li>
                         <li><a href="">Armaduras</a></li>
                         <li><a href="">Anillos</a></li>
                         <li><a href="">Hechizos</a></li>
                         <li><a href="">Milagros</a></li>
                         <li><a href="">Maldiciones</a></li>
                         <li><a href="">Clases</a></li> 
                     </ul>
                 </li> -->
                 <li>
                    <a href="">Mundo</a>
                    <ul>
                        <li><button id="primero">Inicio</button></li>
                        <li><button id="refugio">Refugio de los No Muertos</button></li>
                        <li><button id="santuario">Santuario de Enlace de Fuego</button></li>
                        <li><button id="burgo">Burgo de los No Muertos</button></li>
                        <li><button id="anorlondo">AnorLondo</button></li>
                        <li><button id="horno_primera_llama">Horno de la Primera Llama</button></li>
                        
                    </ul>
                 </li>
                 <!-- <li>
                     <a href="">Enemigos</a>
                     <ul>
                       <li><a href="">Enemigos</a></li>
                       <li><a href="">Jefes</a></li>  
                     </ul>
                 </li>
                 <li>
                     <a href="">Persoanjes</a>
                     <ul>
                         <li><a href=""></a></li>
                         <li><a href=""></a></li>
                         <li><a href=""></a></li>
                     </ul>
                 </li>
                 <li><a href="">Objetos</a>
                 <ul>
                    <li><a href="">Laves</a></li>
                    <li><a href="">Almas</a></li>
                    <li><a href="">Consumibles</a></li>
                    <li><a href="">Proyectiles</a></li>
                    <li><a href="">Munición</a></li>
                    <li><a href="">Piedras</a></li>
                    <li><a href="">Almas de Jefes</a></li>
                 </ul>
                 </li>
                 <li><a href="">Juramentos</a>
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                 </li> -->
                </ul>
             </div>    
        </article>

<div id="inicio">
    <article>
        <img class="TITULO" src="../Img/Dark_Souls_Remastered.png" alt="titulo">
        <div class="datos">
           
            <img class="imagen_de_muestra" src="../Img/Fondos/Fondodos_DS1.jfif" alt="DS1">
            <div class=iguales>
            <p class="titulos">Desarrollado por FromSoftware y Distribuido por Bandai Namco</p>
                <h2 class="hd">Fecha de lanzamiento</h2>

                <p class="parrafito tamanio">Para consolas</p>
                <p class="parrafito">22 de septiembre de 2011 JP</p>
                <p class="parrafito">4 de octubre de 2011 NA</p>
                <p class="parrafito">7 de octubre de 2011 EU</p>
                <p class="parrafito">6 de octubre de 2011 AUS</p>

                <p class="parrafito tamanio">Para PC</p>
                <p class="parrafito">25 de octubre de 2012 JP</p>
                <p class="parrafito">24 de agosto de 2012 NA</p>
                <p class="parrafito">24 de agosto de 2012 EU</p>
                <p class="parrafito">23 de agosto de 2012 AUS</p>
            </div>

            <div class="iguales">
                <h2 class="hd">Genero</h2>
                <p class="parrafito">Rol de acción</p>
            </div>

            <div class="iguales">
                <h2 class="hd">Modos de juego</h2>
                <p class="parrafito">Un jugador</p>
                <p class="parrafito">Multijugador en linea</p>
            </div>

            <div class="iguales">
                <h2 class="hd">Plataformas</h2>
                <p class="parrafito">Xbox 360</p>
                <p class="parrafito">Playstation 3</p>
                <p class="parrafito">Microsoft Windows</p>
            </div>

        </div>

        <div class="modificador">
            <h2 class="hd">Sinopsis General</h2>
            <p class="texto"> 
                Dark Souls es un juego de rol de acción de 2011 desarrollado por FromSoftware y publicado por Bandai Namco Entertainment. Sucesor espiritual de Demon's Souls, es el primer juego de la saga Dark Souls. El juego tiene lugar en el reino de Lordran, donde los jugadores asumen el papel de un personaje no muerto maldito que comienza una peregrinación para descubrir su destino. En agosto de 2012 se lanzó una versión para PC con contenido adicional, conocida como Prepare to Die Edition. También fue lanzada para consolas con el subtítulo Artorias of the Abyss en octubre de 2012.
                Dark Souls ha sido citado como uno de los mejores videojuegos jamás creados. Los críticos elogiaron la profundidad de su combate, su intrincado diseño de niveles y el uso de texto de ambientación. Sin embargo, la dificultad del juego recibió críticas mixtas, y algunos lo criticaron por ser demasiado implacable. La versión original del juego para PC fue menos bien recibida, con críticas dirigidas a varios problemas técnicos. Para abril de 2013, el juego había vendido más de dos millones de copias en todo el mundo. Su éxito condujo al desarrollo de dos secuelas, Dark Souls II (2014) y Dark Souls III (2016), mientras que se lanzó una versión remasterizada en 2018.
            </p>
        </div>

    </article>

    <article>
    
        <div class="modificador">
        <h2 class="hd">Jugabilidad</h2>
            <p class="sub_titulo">Contexto</p>
            <p class="texto">
                El objetivo del juego es ir eliminando a los enemigos y jefes finales que se interpongan en tu camino. Para ello existen hogueras, las cuales sirven de punto de control para el jugador, además de varias funciones más (restablecen la salud, los hechizos, el estado general, los Frascos de Estus que recuperan la salud, y sirven para subir de nivel y como un descanso para el jugador, ya que este juego no tiene pausa). Sin embargo, es importante tener en cuenta que una vez que se descansa en la hoguera, los enemigos eliminados por el jugador reaparecerán, excepto los jefes finales o PNJs asesinados. Muy de vez en cuando el jugador se cruza con diversos PNJs que le serán extremadamente útiles, y en muchos casos fundamentales, para avanzar en el juego. Esto es importante ya que atacar a un PNJ lo volverá hostil por lo que resta del juego, y una vez que se mata un PNJ, este no vuelve a aparecer. Las almas son una especie de puntos de experiencia que se obtienen al eliminar enemigos y utilizar ciertos objetos, y sirven como "créditos" para comprar objetos y para subir de nivel.
                La muerte es una amenaza constante en Dark Souls, y a diferencia de otros juegos del género donde lo único que se tiene que hacer es cargar una partida guardada anteriormente, aquí existen penalizaciones que pueden ser muy graves. El juego se guarda automáticamente en todo momento, pero cuando el jugador muere, en vez de dejar todos los objetos que tenía en su cuerpo, deja sus almas y sus puntos de Humanidad. Para recuperarlos habrá que volver al lugar en donde murió, pero si muere en el camino dejará una nueva marca, eliminando la anterior y, por lo tanto, perdiendo sus almas y puntos de Humanidad para siempre.
            </p>
            <p class="sub_titulo">Controles</p>
            <p class="texto">Los controles del juego son bastante intuitivos, siendo los gatillos derechos utilizados para usar el arma de la mano derecha y los izquierdos para la de la izquierda. También hay un botón para utilizar objetos, un botón para interactuar con el entorno, un botón para evadir y un botón para equipar el arma de la mano derecha con ambas manos (esto aumenta el daño pero dificulta el bloqueo). El pad analógico izquierdo controla al personaje y el derecho la cámara. Al oprimir el pad derecho se establece un objetivo cercano para facilitar la pelea. El pad direccional sirve para cambiar los objetos del inventario, las armas y los hechizos. Al usar el gatillo izquierdo con determinados escudos, el jugador desviará el arma de algunos enemigos, pudiendo efectuar un ataque crítico. Lo mismo pasa con las puñaladas por la espalda. También se puede hacer un ataque aéreo lanzándose contra un enemigo desde arriba y apretando el botón de ataque antes de la caída. Esto último ejerce enormes cantidades de daño. El botón start sirve para abrir el menú y chequear el inventario, las estadísticas, el nivel, y para salir del juego. Debido al modo multijugador, no se puede pausar el juego en ningún momento.</p>
        </div>
    </article>

    <article>
        
        <div class="modificador">
        <h2 class="hd">Lore</h2>
            <p class="texto">
                En la Edad Antigua, el mundo era amorfo y estaba envuelto en niebla. Una tierra de riscos grises, árboles gigantescos y dragones eternos. Pero entonces llegó el Fuego. Y con el Fuego, llegó la Disparidad. Calor y frío, vida y muerte, y por supuesto... Luz y Oscuridad. Entonces, ellos surgieron de la oscuridad. Y encontraron las almas de los dioses dentro de la llama. Nito, el primero de los muertos. La bruja de Izalith y sus hijas del caos. Gwyn el Señor de la Luz Solar, y sus leales caballeros. Y el furtivo pigmeo, a menudo olvidado.
                Con la fuerza de los dioses, desafiaron a los dragones. Gwyn y sus poderosos rayos despellejaron sus escamas pétreas. Las brujas tejieron tormentas de fuego. Nito provocó un miasma de muerte y enfermedad. Y Seath el Descamado traicionó a los suyos, y los dragones desaparecieron.
                Así comenzó la Edad del Fuego. Pero pronto las llamas se apagarán, y sólo quedará Oscuridad. Ahora solo quedan ascuas, y el hombre ya no ve el sol; tan solo noches eternas. Entre los vivos pueden verse a los que sufren la maldición de la Señal Oscura.
                Así es. La Señal Oscura de los no muertos. En esta tierra, han reunido a todos los no muertos para llevarlos al norte. Allí los encerrarán hasta que llegue el fin del mundo. Es tu destino...
                Pero las antiguas leyendas dicen que un día un no muerto será elegido para abandonar el Refugio de los no muertos, en peregrinación a la tierra de los antiguos dioses, Lordran.
            </p>
            <p class="texto">
                El juego tiene lugar en los últimos días de la Edad de Fuego, la cual comenzó tras la derrota de los dragones que anteriormente gobernaban el mundo. Durante la Edad Antigua el mundo era un lugar oscuro y lúgubre habitado solamente por una raza inmortal de dragones gigantes cuya capacidad de prolongar su vida eternamente provenía de sus escamas. Así fue hasta que un grupo de seres descubrieron el poder de la Primera Llama y, siendo liderados por Gwyn, el Señor de la Luz Solar, acabaron con casi la totalidad de los dragones en una legendaria guerra que dio origen, tras la derrota del bando reinante, a la Edad de Fuego. Durante la Edad de Fuego aparecieron todos los seres vivientes que se ven en el mundo de Dark Souls.
            </p>
        </div>
    </article>

    <article>
        
        <div class="modificador">
        <h2 class="hd">Versiones PC y remasterizada</h2>
            <p class="sub_titulo">DarkSouls Prepare to die edition</p>
            <p class="texto">
                Dark Souls: Prepare to Die Edition es la versión para PC del juego. Hasta su lanzamiento, el juego estaba disponible sólo en PlayStation 3 y Xbox 360.
                El lanzamiento de la Prepare to Die Edition tuvo lugar el 24 de agosto de 2012 e incluye el DLC Artorias of the Abyss, el cual incluye nuevos jefes, armas y localizaciones. El DLC Artorias of the Abyss está también disponible como descarga separada en Xbox 360 y PlayStation 3.
            </p>
            <p class="sub_titulo">DarkSouls Remastered</p>
            <p class="texto">
                En un Nintendo Direct sorpresa del 11 de enero de 2018, se anunció que Dark Souls sería remasterizado y porteado a Nintendo Switch, Xbox One, PlayStation 4 y PC. La remasterización fue lanzada el 25 de mayo de 2018 para PC y las consolas Xbox One y PlayStation 4.
                La versión de Nintendo Switch también se planeó originalmente para el 25 de mayo, pero fue retrasada hasta el verano de 2018. El 14 de agosto de 2018, se anunció que la versión de Switch se lanzaría el 19 de octubre de 2018.
            </p>
            <p class="sub_titulo">Requisitos para PC</p>
           <div class="requisitos"> 
            <li class="letras"><p>Sistema operativo: Windows XP - Windows Vista - Windows 7</p></li>
            <li class="letras"><p>Procesador: Intel Core 2 Duo E6850 a 3.0 GHz - AMD Phenom II X2 545 a 3.0 GHz</p></li>
            <li class="letras"><p>Memoria: 2 GB de RAM</p></li>
            <li class="letras"><p>Tarjeta gráfica: NVidia GeForce 9800 GTX+ - ATI Radeon HD 4870</p></li>
            <li class="letras"><p>Disco duro: 4 GB de espacio libre</p></li>
            <li class="letras"><p>DirectX 9.0c</p></li>
            </div>
        </div>
    </article>
</div>


<div id="refugio_2">
    <article>
        <?php
            $Titulo = "SELECT  `Titulo` FROM `ubicaciones` WHERE Id = 1";
            $Resul_Titulo = $conexionDatos->query($Titulo);
            if($Resul_Titulo->num_rows > 0){
                while($Filas = $Resul_Titulo->fetch_array()){
                    echo "<h1 class=\"refugio\">".$Filas[0]."</h1>";
                }
            }
            
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
    </article>

    <article>
        <?php
            $accesorios= "SELECT accesorios.Nombre, accesorios.Efecto, accesorios.img, ubicaciones.Titulo FROM `accesorios` JOIN ubicaciones ON ubicaciones.Id = accesorios.ubicacion_id WHERE accesorios.ubicacion_id = 1";
            $desc_accsesorio="SELECT `Descripcion` FROM `accesorios` WHERE accesorios.ubicacion_id = 1";
            $Result_desc_accsesorio=$conexionDatos->query($desc_accsesorio);
            $Result_accsesorio = $conexionDatos->query($accesorios);
            if($Result_accsesorio->num_rows > 0){
                while($Filas = $Result_accsesorio->fetch_array()){
                        echo "<h2 class=\"margen\">Objetos</h2>
                        <p class=\"sub_titulo_dos\">Accesorios</p>
                        <div class=\"fondito posicion borde posicion_img_dos \">
                        <div>
                        <img class=\"img_objetos \" src=\"../Img/" . $Filas["img"] ."\">
                    </div>

                    <div class=\"borde\">
                    <p class=\"descripcion\">".$Filas["Nombre"]."</p>
                    <p class=\"descripcion\">".$Filas["Efecto"]."</p>
                    <p class=\"descripcion\"> \"Se encuentra en el \" " .$Filas["Titulo"]."</p>
                    </div>
                </div>";
                }
            }

            if($Result_desc_accsesorio->num_rows > 0){
                while($Filas = $Result_desc_accsesorio->fetch_array()){
                    echo "<div class=\"fondito posicion_text borde\">
                <h2 class=\"descripcion\">descripcion</h2>
                <div>
                    <p class=\"descripcion\">".$Filas[0]."</p>
                </div>
            </div>";
                }
            }

        ?>       
    </article>

    <article>
    <p class="sub_titulo_dos distancia">Armas</p>
        <?php
        $armas="SELECT `Nombre`, `Daño`, `Daño_especial`, `Requisitos`, `Durabilidad`, `Tipo`, armas.img, ubicaciones.Titulo, armas.Descripcion FROM `armas` JOIN ubicaciones ON armas.ubicacion_id = ubicaciones.Id WHERE armas.ubicacion_id=1 ";
        $Result_arma=$conexionDatos->query($armas);
        if($Result_arma->num_rows > 0){
            while($Filas=$Result_arma->fetch_array()){
                echo"
        <div class=\"fondito posicion borde posicion_img_dos\">
            <div>
                <img class=\"img_objetos \" src=\"../Img/armas/" . $Filas["img"] ."\">
            </div>

            <div class=\"borde\">
                <p class=\"descripcion\">".$Filas["Nombre"]."</p>
                <div class=\"disposicion\">
                    <p class=\"descripcion\">".$Filas["Daño"]."</p>
                    <p class=\"descripcion\">".$Filas["Durabilidad"]."</p>
                </div>
                <p class=\"descripcion\">".$Filas["Daño_especial"]."</p>
                <p class=\"descripcion\">".$Filas["Requisitos"]."</p>
                <p class=\"descripcion\">".$Filas["Tipo"]."</p>
                <p class=\"descripcion\"> \"Se encuentra en el \" ".$Filas["Titulo"]."</p>
            </div>
        </div>
        
        <div class=\"fondito posicion_text borde distancia_img\">
            <h2 class=\"descripcion\">Descripcion</h2>
            <div>
                <p class=\"descripcion\">".$Filas["Descripcion"]."</p>
            </div>
        </div>
        ";


            }
        }
        ?>
        
    </article>



</div>


<script>
    function mostrar_refugio(){
        document.getElementById('refugio_2').style.display = 'block';
    }

    function ocultar_inicio(){
        document.getElementById('inicio').style.display ='none';
    }

    function cambiar(){
        document.getElementById('cuarto_fondo').style.backgroundImage = 'url(../Img/Fondos/Refugio_de_los_no_muertos.webp)';
    }

    document.getElementById("refugio").onclick = function(){
        mostrar_refugio();
        ocultar_inicio();
        cambiar();
    }
    
</script>
    </main>

    <footer>

    </footer>
</body>
</html>