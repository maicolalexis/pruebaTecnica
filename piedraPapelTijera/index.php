<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <center>
        <h1> Piedra Papel o Tijera </h1>
        <p>seleccione piedra papel o tijera y prueba tu suerte compitiendo contra la maquina</p>


        <div class="vidas">
            <div class="vidaUsuario">
                <h2>Jugador</h2>
                <p>Vida</p>
                <div id="vida"></div>
                <div>seleccion del usuario</div>
                <div id="seleccionUsuario"></div>
            </div>
            <div class="vs">
                <h3>vs</h3>
                <h4 id="resultados"></h4>
                
            </div>
            <div class="vidaMaquina">
                <h2>maquina</h2>
                <p>Vida</p>
                <div id="vidaMaquina"></div>
                <p>seleccion de la maquina</p>
                <div id="seleccionMaquina"></div>
            </div>
        </div>
        <center>
            <button id="reinicio">reiniciar juego</button>
            <div id="seleccionPersona">
                <div style="width: 100px;">
                    <img src="imagenes/piedra.png" alt="">
                    <button class="select" value="piedra">seleccionar</button>
                </div>
                <div style="width: 100px;">
                    <img src="imagenes/papel.png" alt="">
                    <button class="select" value="papel">seleccionar</button>
                </div>
                <div style="width: 100px;">
                    <img src="imagenes/tijera.png" alt="">
                    <button class="select" value="tijera">seleccionar</button>
                </div>
            </div>
        </center>

        <script src="operaciones.js"></script>
</body>

</html>