<!DOCTYPE html>
<html lang="en">

<head>
  <title>Insertar Video</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/style-Video.css" rel="stylesheet">
  <link rel="shortcut icon" href="logo2.png">
</head>

<body>
  <header class="header">
    <div class="container-superior">
      <div>
        <a href="/"><img class="logo" src="/img/logo2.png"> </a>
        <h1 class="title"> VSDS</h1>
      </div>
      <nav class="navigation">
        <ul>
          <li><a class="pagprinc" href="Lista">Atrás</a></li>
        </ul>
      </nav>

    </div>
  </header>
  <main class="main">
    <div class="container-medio">
      <div class="form-register">
        <form id="formulario" action="SubirMusic.php" method="post" enctype="multipart/form-data">
          <h2 class="form-title">Insertar Video</h2>
          <div class="block">
            <label>Titulo/Tema : </label>
            <input required name="name" id="name" spellcheck="false" type="text" maxlength="50" 
            required onkeyup = "this.value=this.value.replace(/^\s+/,'');"
            >

          </div>
          <div class="block">
            <label>Video: </label>
            <input required class="bot1" name="archivo" id="archivo" type="file" accept=".mp4">
          </div>

          <div class="botones">
            <a href=""><button id="btn" class="registrar" type="submit" name="registrar" disabled>Registrar</button></a>

            <button id="cancelar" class="cancelar" type = "reset" onclick = "desactivar()" >Cancelar</button>
          </div>

        </form>

      </div>

  

  </main>

  <script src="btn.js"></script>
</body>

<footer>
  <div class="container-inferior">

  </div>

</footer>

</html>