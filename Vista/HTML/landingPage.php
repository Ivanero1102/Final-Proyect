<!DOCTYPE html>
<html lang="es" style="height:100vh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialHope</title>

    <!-- Enlace a Bootstrap y el tema de Bootswatch -->
    <link rel="stylesheet" href="https://bootswatch.com/5/superhero/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/index.css">

    <!-- Script para que funcione el carrusel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Script para cambiar el icono de la pestana -->
    <link rel="shortcut icon" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/star-fill.svg" style="color: green;">


    <!-- Estilos internos -->
    <style>
        .containerCarrusel {
            height: 45em;
            width: 100%;
            background-color: teal;

        }

        .carousel-item>img {
            height: 45em;
            width: 100%;
        }

        .seccion {
            height: 10em;
            width: 100%;
            background-color: red;
            display: flex;

        }

        .seccionColaborar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 35em;
            width: 100%;
            background-color: green;

        }

        .seccion2 {
            height: 10em;
            width: 100%;

            justify-content: space-evenly;
            align-items: center;
            display: flex;

        }

        .seccion2 img:hover {
            width: 12em;
            height: 12em;
        }

        .seccionColaborar img,
        .seccionInstrucciones img {
            max-width: 100%;
            height: 25vh;
        }

        p {
            font-size: 3em;
            font-weight: lighter;
        }


        .seccionInstrucciones {
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 35em;
            width: 100%;
            text-align: center;
        }

        .carousel-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 2em;
            height: 2em;
            border-radius: 30%;
            background-color: #fff;
            border: none;
        }
    </style>
</head>

<body>


    <!-- Contenido principal de la página -->


    <main>
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
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p>"Solos podemos hacer muy poco, juntos podemos hacer mucho."</p>
                            <img src="../Imagenes/manos.jpg" class="d-block w-100" alt="...">
                            
                        </div>
                     
                        <div class="carousel-item ">
                            <img src="../Imagenes/unidos.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../Imagenes/voluntarios.jpg" class="d-block w-100" alt="...">
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
            <p>Con quien puedes <strong>colaborar</strong> </p>
            <br>
            <div class="seccion2">
                <div class="">
                    <img src="../Imagenes/acnur.png " alt="Imagen 1">
                </div>
                <div class="">
                    <img src="../Imagenes//unicef.png" alt="Imagen 2">
                </div>
                <div class="">
                    <img src="../Imagenes/ayuda.jpeg" alt="Imagen 3">
                </div>
                <div class="">
                    <img src="../Imagenes/greenpeace.jpeg" alt="Imagen 4">

                </div>
            </div>
        </div>

        <!-- seccion ayuda  ---------------------------------------------->
        <div class="seccionInstrucciones">
            <p>Como puedes <strong>colaborar</strong> </p>
            <br>
            <br>
            <div class="seccion2">
                <div class="">
                    <p>Inscribete</p>
                    <img src="../Imagenes/formulario.png" alt="Imagen 1">
                </div>
                <div class="">
                <p>Mira publicidad</p>
                    <img src="../Imagenes/video.png" alt="Imagen 2">
                </div>
                <div class="">
                <p>Ayuda</p>
                    <img src="../Imagenes/colaborar.png" alt="Imagen 3">
                </div>
            </div>
        </div>

    </main>





</body>
<script>

</script>

</html>