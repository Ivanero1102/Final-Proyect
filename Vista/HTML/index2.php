<!DOCTYPE html>
<html lang="es" style="height:100vh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main</title>
  <!-- Enlace a Bootstrap y el tema de Bootswatch -->
  <link rel="stylesheet" href="https://bootswatch.com/5/superhero/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/index.css">
</head>
<body>
  <?php require 'header.html'; ?>

  <!-- Contenido principal de la página -->
  <main class="container-fluid bg-dark d-flex flex-column align-items-center justify-content-center">
    <p>VIDEO PUBLICITARIO</p>
      <div class="row">
        <div class="col">
          <div class="embed-responsive embed-responsive-16by9">
            <video id="video-main" class="embed-responsive-item" controls>
              <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
  </main>

  <?php require 'footer.html'; ?>

</body>
</html>
