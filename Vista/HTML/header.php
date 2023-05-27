<!-- HEADER -->
<nav class="navbar navbar-expand-lg sticky-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="desplegable">
      <i class="fas fa-bars"></i>
    </button>

    <!-- LOGO -->
    <div>
      <img id="logo" src="./Vista/Recursos/Logo2.png" alt="Logo-SocialHope" />
    </div>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Links Izquierda -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link ml-5" href="/Final-Proyect/">Inicio</a>
        </li>

        <!-- Si está logueado, mostramos los links -->
        <?php 
          if (isset($_SESSION['usuario'])) {
            echo '
            <li class="nav-item">
              <a class="nav-link ml-5" href="/Final-Proyect/video">Obtener Puntos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-5" href="/Final-Proyect/ongs">Donar Puntos</a>
            </li>';
          }
        ?>
      </ul>
    </div>
    
    <div class="d-flex align-items-center">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!-- Botón Acceder si no está logeado -->
          <?php
            if (!isset($_SESSION['usuario'])) echo '<button id="boton-acceder" class="nav-link text-nowrap">Acceder</button>';
            else {
              echo '
              <form action="" method="post">
                <input type="submit" value="Cerrar Sesión" id="boton-cerrar-sesion" name="Logout" class="nav-link text-nowrap">
              </form>';
            }
          ?>
          
        </li>
      </ul>
    </div>
    
    

    <!-- POPUP -->
    <div id="popup" class="popup">
      <div id="popup-contenido">
        <span class="cerrar">&times;</span>
        <!-- LOGIN Izquierda -->
        <div id="contenedor-login-registro">
          <div id="contenedor-login">
            <h2>INICIO SESIÓN</h2>
            <form action="" method="post">
              <label for="email">Email</label><br>
              <input type="email" id="email" name="email" required><br>
              <label for="contrasena">Contraseña</label><br>
              <input type="password" id="contrasena" name="contrasena" required><br>
              <input type="submit" value="Entrar" name="Login">
            </form>
          </div>
          <div id="separador-login-registro"></div>
          <!-- REGISTRO derecha -->
          <div id="contenedor-registro">
            <h2>REGISTRO</h2>
            <form action="" method="post">
              <label for="nombre">Nombre</label><br>
              <input type="text" id="nombre" name="nombre" required><br>
              <label for="apellido">Apellido</label><br>
              <input type="text" id="apellido" name="apellido" required><br>
              <label for="edad">Edad</label><br>
              <input type="number" id="edad" name="edad" min="18" max="115" step="1" required><br>
              <label for="email">Email</label><br> 
              <input type="email" id="email" name="email" required><br>
              <label for="contrasena">Contraseña</label><br>
              <input type="password" id="contrasena" name="contrasena" required><br>
              <input type="submit" value="Registrarse" name="Registro">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- FIN HEADER -->