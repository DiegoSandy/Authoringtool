<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilo_lista.css">
    <link rel="shortcut icon" href="logo2.png">
    <title>VSDS</title>
</head>

<body>
    <div class="general">
        <div class="container-superior">
            <a href="/"><img class="logo" src="/img/logo2.png"></a>
            <h1 class="title">VSDS</h1>
            <div class="registro-inicio">
                <a href="InsertarVideo" class="inicio">Insertar Video</a>
                <a href="InsertarCuestionario" class="registro">Insertar Cuestionario</a>
            </div>
        </div>

        <div class="container-medio">
            <br>
            <div class="lista-musica" id="lista-musica">

            </div>
        </div>
        <div class="container-inferior">
            <div class="info-musica">
                <h1 id="nombreM"></h1>
                <h3 id="nombreA"></h3>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>