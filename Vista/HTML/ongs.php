<!DOCTYPE html>
<html lang="es" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialHope</title>
    <!-- Carga los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/superhero/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/index.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Script para cambiar el icono de la pestana -->
    <link rel="shortcut icon" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/star-fill.svg" style="color: green;">
</head>

<body class="bg-white">
    <?php require 'header.html'; ?>
    <main class="container-fluid bg-white ">
    <div class="container-fluid d-flex flex-column" id="main">
        <p id="titulo" class="text-center">
        <?php echo $nombreOng = isset($condicionNombreOng) ? $nombreOngImprint : 'Nombre ONG' ?>
        </p>
        <img src="../Recursos/Imagenes/placeholder.png" class="rounded mx-auto d-block" alt="...">
        <p id="subtitulo" class="text-center">Descripcion</p>
        <div class="embed-responsive d-flex align-items-center justify-content-center">
            <?php echo $descripcion = isset($condicionDescripcion) ? $descripcionImprint : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae deserunt eligendi corporis et similique tempora, fuga suscipit placeat aspernatur natus quisquam qui nisi ab dolorem, ipsum cupiditate, culpa quod recusandae?' ?>
        </div>
        <p id="subtitulo" class="text-center">A que nos dedicamos</p>
        <div class="embed-responsive d-flex align-items-center justify-content-center">
            <?php echo $dedicacion = isset($condicionDedicacion) ? $dedicacionImprint : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae deserunt eligendi corporis et similique tempora, fuga suscipit placeat aspernatur natus quisquam qui nisi ab dolorem, ipsum cupiditate, culpa quod recusandae?' ?>
        </div>
    </div>
    <br>
    <?php require 'footer.html'; ?>
</main>
</body>
<!-- Carga los archivos JavaScript de Bootstrap (necesario para los componentes interactivos) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</html>