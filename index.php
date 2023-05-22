<?php
include './BO/controlador.php';

$rutas = [
    '/Final-Proyect/' => ['Página principal', 'landingpage.php'],
    '/Final-Proyect/ongs' => ['Ong', 'ongs.php'],
    '/Final-Proyect/video' => ['Video', 'video.php'],
];

$request = $_SERVER['REQUEST_URI'];

if($request[0] != '/') {
    $request = '/' . $request;
}

$partes = explode('?', $request);
$request = $partes[0];

error_reporting(0);
switch ($rutas[$request][0]) {
    case 'Página principal':
        include './Vista/HTML/' . $rutas[$request][1];
        break;
    case 'Ong':
        include './Vista/HTML/' . $rutas[$request][1];
        break;
    case 'Video':
        include './Vista/HTML/' . $rutas[$request][1];
        break;
    default:
        http_response_code(404);
        include './Vista/HTML/404.php';
        break;
}

?>