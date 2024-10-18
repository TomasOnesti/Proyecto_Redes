<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Estilos.css">
    <link rel="stylesheet" href="../CSS/lugares.css">
</head>
<body id="Segundo_fondo">
    <header>
        <a href="../index.html"><img class="Logo" src="../Img/Back_Button.png" alt="Volver"></a>
        <h1 class="Principal">Guia de Hollow Knight</h1>
    </header>
    <?php
        $conexionDatos = new mysqli('localhost', 'root', '', 'tonesti');
    ?>
    <main>
        <div class="fondo">
            <h2 class="paginas_titulo">Guia de Hollow Knight: Armas, amuletos, enemigos, jefes,etc. Aqui encontraras las formas mas faciles de pasarte el juego, ademas de toda la informacion que desees. </h2> 
        </div>
    <article>
        <div class="header">
            <ul class="nav">
             <!-- <li>
                 <a href="">Jugador</a>
                 <ul>
                     <li><a href="">Arma</a></li>
                     <li><a href="">Hechizos</a></li>
                     <li><a href="">Habilidades</a></li>
                 </ul>
             </li>
             <li>
                 <a href="">Enemigos</a>
                 <ul>
                   <li><a href="">Enemigos</a></li>
                   <li><a href="">Jefes</a></li>  
                 </ul>
             </li> -->

             <li>
                <a href="">Lugares</a>
                <ul>
                    <li><button id="inicial">Inicio</button></li>
                    <li><button id="lagrimas">Ciudad de las lagrimas</button></li>
                    <li><button id="almas">Santuario de almas</button></li>
                    <li><button id="bocasucia">BocaSucia</button></li>
                    <li><button id="jardines">Jardines de la reina</button></li>
                    <li><button id="palacio">Palacio blanco</button></li>
                </ul>
             </li>
             <!-- <li>
                 <a href="">Persoanjes</a>
                 <ul>
                     <li><a href=""></a></li>
                     <li><a href=""></a></li>
                     <li><a href=""></a></li>
                     <li><a href=""></a></li>
                 </ul>
             </li>
             <li>
                <a href="">DLC</a>
                <ul>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>

                </ul>
             </li> -->
            </ul>
         </div>    
    </article>


<div id="inicio">
    <article>
        <img class="TITULO" src="../Img/hollowknight.png" alt="titulo">
        <div class="datos">
           
            <img class="imagen_de_muestra" src="../Img/Fondos/hollow.webp" alt="DS1">
            <div class=iguales>
            <p class="titulos">Hollow Knight es un videojuego de acción lateral en 2D desarrollado y publicado por Team Cherry.</p>
                <h2 class="hd">Fecha de lanzamiento</h2>

                <p class="parrafito tamanio">Para consolas</p>
                <p class="parrafito">12 de junio de 2018 (Nintendo Switch)</p>
                <p class="parrafito">25 de septiembre de 2018 (Xbox One y Playstation 4)</p>

                <p class="parrafito tamanio">Para PC</p>
                <p class="parrafito">24 de febrero de 2017 (PC)</p>
                <p class="parrafito">11 de abril de 2017 (macOS y Linux)</p>
            </div>

            <div class="iguales">
                <h2 class="hd">Genero</h2>
                <p class="parrafito">Metroidvania</p>
            </div>

            <div class="iguales">
                <h2 class="hd">Modos de juego</h2>
                <p class="parrafito">Un jugador</p>
                <p class="parrafito">Coliseo</p>
            </div>

            <div class="iguales">
                <h2 class="hd">Plataformas</h2>
                <p class="parrafito">Xbox one</p>
                <p class="parrafito">Playstation 4</p>
                <p class="parrafito">Microsoft Windows</p>
                <p class="parrafito">Linux</p>
                <p class="parrafito">macOS</p>

            </div>

        </div>

        <div class="modificador">
            <h2 class="hd">Sinopsis General</h2>
            <p class="texto"> 
                Hollow Knight cuenta la historia del Caballero, en su búsqueda por descubrir los secretos del largamente abandonado reino de los insectos de Hallownest, cuyas profundidades atraen a los aventureros y valientes con la promesa de tesoros o la respuesta a misterios antiguos...
            </p>
        </div>

    </article>

    <article>
    
        <div class="modificador">
        <h2 class="hd">Jugabilidad</h2>
            <p class="sub_titulo">Contexto</p>
            <p class="texto">
                Los jugadores deberán explorar el enorme mundo abierto de Hallownest utilizando una amplia gama de movimientos y técnicas de combate, incluyendo hechizos. Fiel al estilo Metroidvania, existen ciertas áreas donde el jugador deberá encontrar primero un objeto o desbloquear una habilidad para poder acceder. Existen diversos mapas del reino que el jugador puede comprar a Cornifer en cada área que visita; además de esto, cada zona tiene su propio jefe: un enemigo más poderoso y con más cantidad de vida que debe ser derrotado para avanzar.
                Los enemigos derrotados dejarán caer Geo, la moneda utilizada en Hallownest y que se puede usar para comprar bienes o pagar el peaje en diversos mecanismos antiguos. Además, todos los enemigos derrotados harán aumentar el ALMA del Caballero, lo que le permitirá lanzar Hechizos o usar la Concentración, que sana máscaras de vida al jugador a lo largo del tiempo.
            </p>
        </div>
    </article>

    <article>
        <div class="modificador">
        <h2 class="hd">Lore</h2>
            <p class="sub_titulo">Introducción</p>
            <p class="texto">
                Antes del reino de Hallownest, había una criatura todopoderosa, EL Destello, que a través de su luz engendró a la tribu de las polillas. Entre todas, crearon el reino de Hallownest, un lugar para que los artrópodos pudieran pasar sus vidas. Pronto llegaron artrópodos de todo tipo. La tribu de las Mantis, un pueblo guerrero o la tribu de las Abejas, una sociedad jerarquizada, eran de las muchas especies que llegaron al nuevo reino, y aunque respetaban a Destello como máxima autoridad, las Mantis tenian su propio gobierno, y las abejas se encerraron en su colmena, ajenas a todo lo que pasara en Hallownest.
                Todo era paz y armonía, o eso parecía.
                Destello en realidad era un parásito que aprovechaba las mentes débiles de los artrópodos que la veneraban, para sus propios fines, a cambio, ella les concedia los deseos que pidieran. Eso ya era bastante, aunque los artrópodos no se daban cuenta y alguno que se daba cuenta no le importaba. Sus mentes poseídas no eran problema en comparación a los deseos que conseguían. A nadie le importó hasta que llegó un ser que lo cambiaría todo.
            </p>
        </div>
    

    
        
        <div class="modificador">
        
            <p class="sub_titulo">El rey pálido</p>
            <p class="texto">
                La tribu de los Wyrm eran una tribu que vivía desde la misma época que Destello, y tenían mucho poder, suficiente para derrotar a Destello. Y aunque podrían haberlo hecho, misteriosamente empezaron a extinguirse todos, pero cuando el último Wyrm murió, se reencarno en un ser más pequeño, pero con su misma sabiduría, el Rey Pálido.
                El Rey Pálido descubrió lo que estaba haciendo Destello y le abrió la mente a todos los artrópodos. Con ayuda de los 5 grandes caballeros, que el Rey fue reclutando, con el apoyo de la Dama Blanca, de la que el Rey se había enamorado y sin mentes para invadir Destello fue derrotada, o más bien olvidada, puesto que no hubo batalla. En Hallownest se inició una nueva etapa.
            </p>
            <p class="sub_titulo">La era dorada de Hallownest</p>
            <p class="texto">
                En el reino, empezó una era de prosperidad, en la que se avanzó muchísimo a nivel tecnológico. Se inventaron los tranvías, los ciervocaminos, y se descubrieron los amuletos. Cada zona de Hallownest empezó a desempeñar un papel importante en la sociedad, como Nidoprofundo, donde se empezaba a desarrollar un nuevo tranvía o en Límite del Reino, donde se creó un coliseo para disfrute de los habitantes. La Ciudad de Lágrimas se convirtió en la capital de este próspero reino, pero lo bueno no duró demasiado.
            </p>
            <p class="sub_titulo">La Infección</p>
            <p class="texto">
                Destello había estado planeando su venganza todo este tiempo, y lo consiguió. Aprovecho la mente de artrópodos débiles otra vez, que aunque la olvidaran, recordaban el gusto que sentían al recibir deseos. Ella se les aparecía en sueños, y cada vez los sueños se hicieron más frecuentes, y dolorosos. Era como una infección. Al final los pobres artrópodos no pudieron más y se volvieron locos, agresivos y más fuertes. El sueño fue tan poderoso que tomó forma física, era como un moco o líquido naranja (se puede observar en Cruces Infectados) y se propagó por el aire. Las tribu e artrópodos de mente más privilegiada pudieron sobrevivir, aunque alguno no resistió la tentación de tener tanto poder. Destello ya no se conformaba con gobernar mentes, ahora quería destruirlo todo. Parecía todo perdido.
            </p>
            <p class="sub_titulo">Experimentos con el vacío</p>
            <p class="texto">El Rey intentó encontrar una solución a esta plaga, y pensó que para vencer a la luz, se necesita oscuridad, así que fue al Abismo y empezó a experimentar con él para crear a un receptáculo puro. Necesitaba crear algo capaz de contener la infección en su interior, y puesto que el vacío era eso, vacío, lo aprovechó para intentar crear a un ser capaz de cumplir ese cometido. Sus primeros experimentos no salieron muy bien, ni sus segundos. Tardó muchos años en encontrar un receptáculo puro, mientras Destello amenazaba con aniquilar a los artrópodos, hasta que un día, lo consiguió.</p>

            <p class="sub_titulo">El Hollow Knight</p>
            <p class="texto">Creó al receptáculo perfecto, o eso creía. Era el Hollow Knight, o el Caballero Vacío. El Rey necesitaba a un ser incapaz de tener sentimientos, y este lo aparentaba. El Hollow Knight absorbió a Radiance y ella se quedó atrapada en su mente, como en un sueño. Para asegurarse, el Rey consiguió que tres seres de mucho poder, se convirtieran en los sellos que contendrían al Hollow Knight, en caso de que algo saliera mal. Fueron Monomon, la Maestra, que contenía muchísima sabiduría, estudiaba mucho en sus archivos. También estuvo Lurien, el Vigilante, que vigilaba la Ciudad de Lágrimas desde su Torre y que por la lealtad que tenía hacia su rey aceptó hacer ese sacrificio. Y por último Herrah, la Bestia, reina de las criaturas de Nidoprofundo que en un principio no estaba dispuesta a sacrificarse, pero después de un trato que tuvo con el rey, aceptó. Los tres se convirtieron en los Soñadores, se durmieron para siempre y desde los sueños contuvieron al Hollow Knight.</p>

            <p class="sub_titulo">El regreso de la Infección</p>
            <p class="texto">
                Pasó el tiempo y el Rey murió, la Dama Blanca se escondió y el grupo de los 5 caballeros se disolvió. Y aunque se suponía que todo estaba bajo control, había algo que hacía que la gente no se quedara tranquila. Pues como se había mencionado antes, el Hollow Knight no era perfecto. Sí tenía un sentimiento, lealtad hacia el rey. El rey trató al Hollow Knight como si fuera su hijo, y él sintió apego hacia el rey. Eso demostró que el Caballero Vacío, no estaba tan vacío después de todo. Destello aprovechó esto, y se propagó una vez más. Ni los Soñadores pudieron contra ella, pero no se podían despertar, porque ahora si que tenían que contener al Hollow Knight encerrado. El vacío del Hollow Knight, se llenó de infección y ahora ella controlaba su cuerpo, y a la vez, lo usaba de transmisor, por lo que si el Hollow Knight salía, se propagaría mucho más rápido. Los artrópodos débiles volvieron a infectarse. El reino volvió a la ruina, y sin su rey, se les acababan las esperanzas.
                Y en este punto es cuando llega nuestro personaje a Hallownest, otro receptáculo más que deberá abrirse paso entre este devastado reino para bien, sustituir al Hollow Knight como receptáculo puro, o bien acabar con la misma Destello de una vez.
            </p>


            </div>
        </div>
    </article>
</div>

<div>

</div>
<script>
    function cambiar_lagrima(){
        document.getElementById('cuarto_fondo').style.backgroundImage = 'url(../Img/Fondos/City_of_Tears_Fountain_Square.png)';
    }

    function mostrar_lagrima(){
        document.getElementById('lagrimas_2').style.display = 'block';
    }
    //Ocultar
    function ocultar_lagrima(){
        document.getElementById('lagrimas_2').style.display ='none';
    }

    function ocultar_inicio(){
        document.getElementById('inicio').style.display ='none';
    }

    function ocultar_almas(){
        document.getElementById('refugio_2').style.display ='none';
    }

    function ocultar_jardines(){
        document.getElementById('santuario_2').style.display ='none';
    }

    function ocultar_bocasucia(){
        document.getElementById('burgo_2').style.display ='none';
    }

    function ocultar_palacio(){
        document.getElementById('anorlondo_2').style.display ='none';
    }

    document.getElementById("lagrimas").onclick = function(){
        ocultar_inicio();
        // ocultar_burgo();
        // ocultar_refugio();
        // ocultar_santuario();
        // ocultar_horno();
        mostrar_lagrima();
        cambiar_lagrima();
    }    
</script>
    </main>

    <footer></footer>
</body>
</html>