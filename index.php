<?php 
    $pg = "inicio";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Proyectos</title>
</head>

<body id="inicio">
    <?php include_once("header.php");?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.php"><img src="images/cohete.svg" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
        
    <footer class="container">
        <div class="row mt-5">
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/daniel-blanco-5954b71b1" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="danieloropeza98sc@gmail.com">danieloropeza98sc@gmail.com</a>
            </div>

        </div>
    </footer>
    <div class="whatsapp col-sm-3 col-12 text-right">
        <a href="https://api.whatsapp.com/send?phone=541162423341" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap-dan/js/bootstrap.bundle.min.js"></script>

</body>

</html>