<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrar Audiolibro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo_Cuestionario.css" rel="stylesheet">
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
            <div class="reg-audiolibro">
                <form action="RegistroAudiolibro.php" method="post" enctype="multipart/form-data" class="form-disable">
                    <h2 class="form-title">Insertar Cuestionario</h2>
                    <div class="block">
                        <label>Titulo/Tema : </label>
                        <input required type="text" spellcheck="false" maxlength="50" name="name" id="name"
                        required onkeyup = "this.value=this.value.replace(/^\s+/,'');"
                        >
                    </div>
                    <div class="block">
                        <label>Pregunta 1 : </label>
                        <input required type="text" spellcheck="false" maxlength="50" name="autor" id="autor"
                        required onkeyup = "this.value=this.value.replace(/^\s+/,'');"
                        >
                        <input type="checkbox" name="opcion1" value="opcion1">
                        <label for="opcion1">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>

                        <input type="checkbox" name="opcion2" value="opcion2">
                        <label for="opcion2">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>

                        <input type="checkbox" name="opcion3" value="opcion3">
                        <label for="opcion3">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>
                    </div>
                    <div class="block">
                        <label>Pregunta 2 : </label>
                        <input required type="text" spellcheck="false" maxlength="50" name="narrador" id="narrador"
                        required onkeyup = "this.value=this.value.replace(/^\s+/,'');"
                        >
                        <input type="checkbox" name="opcion1" value="opcion1">
                        <label for="opcion1">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>

                        <input type="checkbox" name="opcion2" value="opcion2">
                        <label for="opcion2">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>

                        <input type="checkbox" name="opcion3" value="opcion3">
                        <label for="opcion3">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>
                    </div>
                    <div class="block">
                        <label>Pregunta 3 : </label>
                        <input required type="text" spellcheck="false" maxlength="50" name="narrador" id="narrador"
                        required onkeyup = "this.value=this.value.replace(/^\s+/,'');"
                        >
                        <input type="checkbox" name="opcion1" value="opcion1">
                        <label for="opcion1">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>

                        <input type="checkbox" name="opcion2" value="opcion2">
                        <label for="opcion2">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>

                        <input type="checkbox" name="opcion3" value="opcion3">
                        <label for="opcion3">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>
                    </div>
                    <div class="block">
                        <label>Pregunta 4 : </label>
                        <input required type="text" spellcheck="false" maxlength="50" name="narrador" id="narrador"
                        required onkeyup = "this.value=this.value.replace(/^\s+/,'');"
                        >
                        <input type="checkbox" name="opcion1" value="opcion1">
                        <label for="opcion1">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>

                        <input type="checkbox" name="opcion2" value="opcion2">
                        <label for="opcion2">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>

                        <input type="checkbox" name="opcion3" value="opcion3">
                        <label for="opcion3">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>
                    </div>
                    <div class="block">
                        <label>Pregunta 5 : </label>
                        <input required type="text" spellcheck="false" maxlength="50" name="narrador" id="narrador"
                        required onkeyup = "this.value=this.value.replace(/^\s+/,'');"
                        >
                        <input type="checkbox" name="opcion1" value="opcion1">
                        <label for="opcion1">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>

                        <input type="checkbox" name="opcion2" value="opcion2">
                        <label for="opcion2">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>

                        <input type="checkbox" name="opcion3" value="opcion3">
                        <label for="opcion3">
                            <div class="answer">
                                <input required type="text" maxlength="50" name="autor" 
                                required onkeyup = "this.value=this.value.replace(/^\s+/,'');">
                            </div>
                        </label>
                    </div>

                    <div class="botones">
                        <button type="submit" class="registrar" name="registrar" id="registrar" disabled >Registrar</button>
                        <button class="cancelar" type="reset" onclick = "desactivar1()" >Cancelar</button></a>

                    </div>
                </form>
            </div>
        </div>

    </main>
    <script src="btnA.js"></script>
</body>


</html>
