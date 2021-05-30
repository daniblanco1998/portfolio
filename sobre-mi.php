<?php 
    $pg = "sobre-mi";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-dan/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-dan/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-dan/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Sobre mí</title>
</head>

<body id="sobre-mi">
    <?php include_once("header.php");?>
    <main class="container">
        <div class="row">
            <div class="col-sm-5 col-12 mt-4">
                <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                <p class="pb-sm-5">Apasionado por la tecnología y el desarrollo wed. Estudiante de cursos de
                    programación Full Stack y de Base de datos.</p>
                <a href="contacto.html" class="btn btn-rojo">Enviar mensaje</a>
            </div>
            <div class="col-sm-3 col-12 mt-4 offset-sm-2">
            <img src="../htdocs/portfolio.db/images/mi-foto.png" alt="Daniel Blanco" title="Daniel Blanco" class="img-fluid img-circle">
            </div>
        </div>

    </main>
</body>