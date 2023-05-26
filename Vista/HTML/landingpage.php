<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'metadata.php'; ?>
    <!-- Únicamente estilos propios -->
    <link rel="stylesheet" href="./Vista/CSS/landingpage.css">
</head>
<body>
<?php
    try{
        require './Vista/HTML/header.php'; 
    } catch(Error $e){
        header("Location: http://localhost/Final-Proyect/404");
        exit();
    }
?>

    <!-- PRINCIPAL -->
    <div>
        <div id="bloque1">
            <div id="contenedor-textos">
                <span>¡Bienvenido/a a SocialHope!</span>
                <p>Comienza a ganar puntos gratis y a donar a diferentes ONG</p>
            </div>
        </div>

        <div id="bloque2">
            <div id="titulo-descripcion">
                <h2>OBJETIVO</h2>
                <p>
                    Damos la oportunidad a cualquier usuario de poder donar a diferentes
                    ONG sin necesidad de realizar ningún pago previo, concienciando y promoviendo la ayuda
                    a personas y ONG's.
                </p>

                <h2>CÓMO LO LOGRAMOS</h2>
                <p>
                    A través de diferentes videos publicitarios que te irán saliendo en la propia web irás
                    obteniendo puntos llamados SH. Estos son los puntos que serán donados a la ONG de tu
                    elección. 
                </p>

                <h2>NUESTRO BENEFICIO</h2>
                <p>
                    Somos una web sin ánimo de lucro aceptando únicamente donaciones de aquellos
                    usuario que quieran colaborar con el desarrollo y mantenimiento de la web. 
                </p>
            </div>
            <div><img src="./Vista/Recursos/Imagenes/Claqueta.jpg" alt="Video-Logo"></div>
        </div>

        <div id="bloque3">
            <h2>COLABORADORES</h2>
            <div id="contenedor-imagenes-superior">
                <a href="https://eacnur.org/es" target="_blank">
                    <img class="normalizado" src="./Vista/Recursos/Imagenes/acnur2.png" alt="Logo-Acnur">
                </a>
                <a href="https://ayudaenaccion.org/" target="_blank">
                    <img class="normalizado" src="./Vista/Recursos/Imagenes/ayuda.jpeg" alt="Logo-AyudaEnAccion">
                </a>
                <a href="https://es.greenpeace.org/es/" target="_blank">
                    <img class="normalizado" src="./Vista/Recursos/Imagenes/greenpeace.jpeg" alt="Logo-Greenpeace">
                </a>
                <a href="https://accionsolidaria.info/" target="_blank">
                    <img class="normalizado" src="./Vista/Recursos/Imagenes/accion-solidaria.jpg" alt="Logo-AccionSolidaria">
                </a>
                
            </div>
            <div id="contenedor-imagenes-inferior">
                <a href="https://www.msf.es/" target="_blank">
                    <img class="normalizado" src="./Vista/Recursos/Imagenes/medicos.png" alt="Logo-MedicosSinFronteras">
                </a>
                <a href="https://www.cear.es/" target="_blank">
                    <img class="normalizado" src="./Vista/Recursos/Imagenes/cear.jpg" alt="Logo-Cear">
                </a>
                <a href="https://www.unicef.es/" target="_blank">
                    <img class="normalizado" src="./Vista/Recursos/Imagenes/unicef.jpg" alt="Logo-Unicef">
                </a>
            </div>
        </div>

        <div id="bloque4">
            <h2>CONVIÉRTETE EN UNA ENTIDAD COLABORADORA</h2>
            <p>Las entidades colaboradoras son empresas y organizaciones que están alineadas con nuestros proposito y quieren ayudar a escalar su impacto ayudándonos a expandirlos.</p>
            <!-- <button type="button" class="btn">Contáctanos</button> -->
            <p>Pincha <a href="mailto:SocialHope@hotmail.com" id="correo-automatico">aquí</a> o envíanos un correo a <span id="correo">SocialHope@hotmail.com</span></p>

        </div>
    </div>
    <!-- FIN PRINCIPAL -->

    <?php require 'footer.html'; ?>
</body>
</html>