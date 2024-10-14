<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/comentario.css">
</head>
<body class="fondo">
    <header>
        <h1>Foro de dudas(nombre pendiente)</h1>
    </header>
    <main>
        <article>
            <h1>General</h1>
        <div class="header">
                <ul class="nav">
                 <li>
                     <a href="">Dudas</a>
                 </li>

                 <li>
                     <a href="">Errores</a>
                 </li>

                 <li>
                     <a href="">DS1</a>
                 </li>

                 <li>
                     <a href="">DS3</a>
                 </li>

                 <li>
                     <a href="">HK</a>
                 </li>

                 <li>
                     <a href="">Ter</a>
                 </li>
                </ul>
             </div>    
        </article>

        <article class="separacion">
            <div id="comentarios">
            <div class="contenedor">
                <h2 class="user">User Name</h2>
                <div class="contenedor_2">
                    <input class="text fondito" type="text" name="comentario" placeholder="Escriba un comentario">
                </div>
                <p class="fecha">fecha</p>
                <button class="comentar_2">Comentar</button>
            </div> 
            </div>
        </article>

        <button id="comenta" class="comentar">Comentar</button>

        <script>
            // function texto(){
            //     var element = document.createElement("div");
            //     var element_2 = document.createElement("input");

            //     element_2.setAttribute("name", "comentario");
            //     element_2.setAttribute("type", "text");
            //     element.classList.add("contenedor_2");
            //     element_2.classList.add("text");
            //     element_2.classList.add("fondito");

            //     element.appendChild(element_2);
            // }
            function mostrar(){
        document.getElementById('comentarios').style.display = 'block';
    }
            document.getElementById("comenta").onclick = function(){
                // texto();
                mostrar();
            }
        </script>


    </main>
</body>
</html>