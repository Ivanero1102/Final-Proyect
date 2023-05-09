<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialHope</title>
    <!-- Carga los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <!-- Enlace a Bootstrap y el tema de Bootswatch -->
    <link rel="stylesheet" href="https://bootswatch.com/5/superhero/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/index.css">

    <!-- Script para que funcione el carrusel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Script para cambiar el icono de la pestana -->
    <link rel="shortcut icon" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/star-fill.svg" style="color: green;">

    <!-- Estilos internos -->
    <style>
        /* Div 1 Seccion Carrusel  ------------------------------------------------------*/
        .containerCarrusel {
            height: 45em;/* Alto del contenedor del div 1  */
            width: 100%;
        }

        .carousel-item>img {
            height: 45em;
            /* Alto de las imagenes del div 1  */
            width: 100%;
        }

        .fraseCarruselImg1 {
            /* Estilos de las frase de la imagenes 1 del carrusel  */
            position: absolute;
            top: 80%;
            right: 50px;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 1em;
            border-radius: 1.5em;
            color: black;
        }

        .fraseCarruselImg2 {
            /* Estilos de las frases de las imagenes 2 y 3 del carrusel */
            position: absolute;
            top: 40%;
            left: 10%;
            width: 40em;
            font-weight: 500;
            padding: 1em;
            color: white;
        }

        /* Div 2 Seccion Ongs para colaborar ------------------------------------------------------*/
        .seccionColaborar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 40em; /* Alto del contenedor del div 2  */
            width: 100%;
            background-color: #8DBB9C;
        }


        .seccion2 { /* Estilos del contenedor de las imagenes de la seccion 2 y 3 que equivalen a seccion ayuda y seccion colaborar */
            height: 10em;
            width: 100%;
            justify-content: space-evenly;
            align-items: center;
            display: flex;
        }
        .seccion2 img:hover {/* Estilos del contenedor de las imagenes de la seccion 2 y 3 que equivalen a seccion ayuda y seccion colaborar */
            width: 12em;
            height: 12em;
        }

        /* Estilo de las imagenes seccion 2 y 3 que equivalen a seccion ayuda y seccion colaborar   */
        .seccionColaborar img,
        .seccionInstrucciones img {
            max-width: 100%;
            height: 22vh;
        }

        p {
            font-size: 1.5em;
            font-weight: lighter;
        }

        h2 {
            font-size: 3em;
            font-weight: lighter;
        }

        /* Div 3 Seccion Instrucciones de uso  ------------------------------------------------------*/
        .seccionInstrucciones {
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 40em; /* Alto del contenedor del div 3  */
            width: 100%;
            text-align: center;
            background-color: white;
            color: black;
        }

        .carousel-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 2em;
            height: 2em;
            border-radius: 30%;
            border: none;
        }


        /* Div 4 Seccion entidades colaboradoras ------------------------------------------------------*/
        .seccionEntidad {
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 35em;
            width: 100%;
            text-align: center;
            background-color: #4A456A;
        }
    </style>
</head>

<body class="bg-white">

    <?php require 'header.html'; ?>
    <!-- Contenido principal de la página -->


    <main class="container-fluid bg-white ">
        <!---CARRUSEL--------------------------------------------------------------------------------------- -->
        <div class="containerCarrusel" id="carrusel">
            <div class="row">
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Boton para cambiar a diferentes imagenes   -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <!-- Imagenes del carrusel -->

                    <!-- Imagen 1 carrusel -->
                    <div class="carousel-inner">
                        <div class="carousel-item ">
                            <div class="fraseCarruselImg1">
                                <p>"Ayudanto juntos, hacemos la diferencia"</p>
                            </div>
                            <img src="../Recursos/Imagenes/manos.jpg" class="d-block w-100" alt="...">
                        </div>
                        <!-- Imagen 2 carrusel -->
                        <div class="carousel-item active">
                            <div class="fraseCarruselImg2">
                                <h2> <strong>Quiénes somos</strong> </h2>
                                <p>Somos una plataforma sin fines de lucro que busca fomentar la donación a las ONGs más reconocidas a nivel mundial, promoviendo la concienciación sobre su labor en la sociedad actual y generando una experiencia enriquecedora para el usuario.
                                </p>
                            </div>
                            <img src="../Recursos/Imagenes/unidos.jpg" class="d-block w-100" alt="...">

                        </div>
                        <!-- Imagen 3 carrusel -->
                        <div class="carousel-item">
                            <div class="fraseCarruselImg2">
                                <h2> <strong>Hazte socio</strong> </h2>
                                <p>¡Juntos, cambiemos el mundo con un clic!</p>
                            </div>
                            <img src="../Recursos/Imagenes/voluntarios.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <!-- Botones del carrusel  -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </div>


        <!-- Seccion colaborar ---------------------------------------------->
        <div class="seccionColaborar">
            <h2>Con quien puedes <strong>colaborar</strong> </h2>
            <br><br><br>
            <div class="seccion2">
                <div class="">
                    <img src="../Recursos/Imagenes/acnur.png " alt="Imagen 1">
                </div>
                <div class="">
                    <img src="../Recursos/Imagenes//unicef.png" alt="Imagen 2">
                </div>
                <div class="">
                    <img src="../Recursos/Imagenes/ayuda.jpeg" alt="Imagen 3">
                </div>
                <div class="">
                    <img src="../Recursos/Imagenes/greenpeace.jpeg" alt="Imagen 4">

                </div>
            </div>
        </div>

        <!-- seccion ayuda  ---------------------------------------------->
        <div class="seccionInstrucciones">
            <h2>Como puedes <strong>colaborar</strong> </h2>
            <br><br><br>
            <div class="seccion2">
                <div class="">
                    <p>Inscribete</p>
                    <img src="../Recursos/Imagenes/formulario.png" alt="Imagen 1">
                </div>
                <div class="">
                    <p>Mira publicidad</p>
                    <img src="../Recursos/Imagenes/video.png" alt="Imagen 2">
                </div>
                <div class="">
                    <p>Ayuda</p>
                    <img src="../Recursos/Imagenes/colaborar.png" alt="Imagen 3">
                </div>
            </div>
        </div>


        <!-- seccion ayuda  ---------------------------------------------->
        <div class="seccionEntidad">
            <h2>CONVIÉRTETE EN UNA ENTIDAD COLABORADORA</h2>
            <br>
            <br>
            <p>Las entidades colaboradoras son empresas y organizaciones que están alineadas con nuestros proposito y quieren ayudar a escalar su impacto ayudándonos a expandirlos.</p>
            <a href="ayudaOng@gmail.com">Enviar correo</a>

            <div>

            </div>
        </div>
        </div>

    </main>


    <?php require 'footer.html'; ?>


</body>
<!-- Carga los archivos JavaScript de Bootstrap (necesario para los componentes interactivos) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>

</html>