<?php
$pg = "contacto";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-dan/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-dan/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-dan/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Contacto</title>
</head>

<body id="contacto">
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-sm-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12 mt-4">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-sm-6 col-12 mt-4">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="tel" id="txtTel" name="txtTelefono" placeholder="Telefono/Whatsapp" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class=" form-control shadow"></textarea>
                    </div>
                    <div class="me-auto">
                        <button id="btnEnviar" name="btnEnviar" class="btn px-4">ENVIAR</button>
                    </div>

                </form>
            </div>
        </div>

    </main>
    <footer class="container">
        <div class="row mt-5">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/daniel-blanco-5954b71b1" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
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