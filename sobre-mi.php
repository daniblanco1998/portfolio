<?php
$pg = "sobre-mi";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Sobre mí</title>
</head>

<body id="sobre-mi">
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-sm-5 col-12 mt-4">
                <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                <p class="pb-sm-5">Apasionado por la tecnología y el desarrollo wed. Estudiante de cursos de
                    programación Full Stack y de Base de datos.</p>
                <a href="contacto.html" class="btn btn-rojo px-2">Enviar mensaje</a>
                
            </div>
            <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                <img src="images/mi-portfolio-photo.JPG" alt="Daniel Blanco" title="Daniel Blanco" class="img-fluid img-circle">
            </div>
        </div>
        <section class="color-gradiente pb-5" id="tecnologias">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Javascript</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-js.jpeg"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>PHP</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-php.jpg"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>HTML5</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-html5.png"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>React.js</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-react.js.png"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>jQuery</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-jquery.jpg"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Bootstrap</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-bootstrap.png"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-4 mt-0">
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Laravel</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-laravel.png"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>MySQL</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-mysql.png"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>CSS</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-css.png"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Git</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-git.png"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Apache</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-apache-db.jpg"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Mercadopago</h3>
                                <img class="mx-auto d-block img-fluid" width="60" src="images/icon-mp.jpg"
                                    alt="Javascript" title="Javascript">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
                <div class="container">
                    <div class="row py-5 mx-0">
                        <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                            <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                                <div class="card col-4 text-center">
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                                <div class="col-8 p-5">
                                    <h2>IDIOMAS</h2>
                                    <ul>
                                        <li>
                                            ESPAÑOL - NATIVO
                                        </li>
                                        <li>
                                            INGlÉS - BÁSICO
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                                <div class="col-4 card text-center">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="col-8 p-5">
                                    <h2>HOBBIES</h2>
                                    <ul>
                                        <li>
                                            LECTURA
                                        </li>
                                        <li>
                                            GUITARRISTA
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="formacion" class="container">
                <div class="row">
                    <div>
                        <h2><i class="fas fa-graduation-cap"></i> Formación acádémica</h2>
                    </div>
                </div>
                <div class="row shadow bg-white">
                    <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                        <img src="images/logo-depcsuite.svg" tittle="depcsuite" class="img-fluid baw">
                    </div>
                    <div class="col-12- col-sm-10 p-3">
                        <h3>Programador Full Stack</h3>
                        <h4>DEPCSUITE SA</h4>
                        <h5>2021</h5>
                        <p>Lidera el desarrollo y posicionamiento de la empresa en sus tres líneas de negocio: cloud
                            services, desarrollo de sistemas y educación IT en Buenos Aires, con sedes en Puerto Madero
                            y
                            Belgrano. Celebración de convenios estratégicos. Desarrollo de nuevos productos.
                            Coordinación
                            del área de sistemas y educación. Docente de cursos tecnológicos en: Laravel, PHP, HTML,
                            CSS,
                            Javascript, jQuery, AJAX, React.js, Bootstrap, GitLab, HTTP Apache2, SSL, MySQL, HAProxy,
                            ProFTPd, virtualización con VMware ESXi, GNU/Linux Debian.</p>
                    </div>
                </div>
            </section>

    </main>
    <footer class="container">
        <div class="row mt-5">
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/daniel-blanco-5954b71b1" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                <b>Sponsor</b> <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE"><b>DePC Suite</b></a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
            <a href="danieloropeza98sc@gmail.com"><b>danieloropeza98sc@gmail.com</b></a>
            </div>

        </div>
    </footer>
    <div class="whatsapp col-sm-3 col-12 text-right">
        <a href="https://api.whatsapp.com/send?phone=541162423341" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script> 
</body>
</html>