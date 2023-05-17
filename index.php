<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Su,Es,Ri.A.C</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- CSS -->
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <nav class="nav-links">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="noticias.php">noticias</a></li>
                <li><a href="acercade.php">Acerca de</a></li>
                <li id="contact-us"><a href="contacto.php">Contáctanos</a></li>
                <li><a href="login.php">Iniciar sesion</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <a href="https://prod.liveshare.vsengsaas.visualstudio.com/join?EF5E3B7184310D7313E50D43740B1725B55A">Link siniestro</a>
        <!-- Carrousel -->
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/imagen2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/imagen4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/imagen3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Header 1 -->
        <h1>Somos una asociación civil sin fines de lucro compuesta por jóvenes que quieren un cambio positivo.
        </h1>
        <!-- info containter -->
        <section class="info-container">
            <div class="description">
                <!-- Marco etico -->
                <h2 class="title">Marco ético</h2>
                <p>
                    Llegar a ser la Asociación Civil de jóvenes más importante e influyente a nivel nacional e
                    internacional, gracias a que promovemos el cambio de conciencia en las futuras
                    generaciones mediante el desarrollo de resiliencia en cada una de las comunidades que
                    atendemos.
                </p>
            </div>
            <!-- mision & vision -->
            <div class="mision_vision">
                <div class="mision">
                    <h3 class="subtitle">Misión</h3>
                    <p>Contribuir en el desarrollo integral familiar enfocándonos principalmente en los niños en
                        estado marginal de nuestro país, desde un punto de vista alimenticio, educativo y
                        emocional.</p>
                </div>
                <div class="vision">
                    <h3 class="subtitle">Visión</h3>
                    <p>Llegar a ser la Asociación Civil de jóvenes más importante e influyente a nivel nacional e
                        internacional, gracias a que promovemos el cambio de conciencia en las futuras
                        generaciones mediante el desarrollo de resiliencia en cada una de las comunidades que
                        atendemos.</p>
                </div>
            </div>
        </section>
    <p id="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam exercitationem rem incidunt
    velit. Inventore necessitatibus consectetur animi veniam placeat id, maiores quod distinctio hic culpa vitae
    nisi nihil nulla harum.
    </p>
    </main>

    <footer>
        <div>
            <h2>Redes sociales</h2>

            <a href="#"><img src="img/FacebookL.png" height="50px"> </a>
            <a href="#"><img src="img/youtubeL.png" height="50px"> </a>
            <a href="#"><img src="img/InstagramL.png" height="50px"> </a>
            <a href="#"></a>
        </div>
    </footer>
</body>
</html>