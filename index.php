<?php
$rutas = [
    '/Final-Proyect/' => ['Página principal', 'landingpage.php'],
    '/Final-Proyect/resguardo' => ['Resguardo', 'resguardo.php'],
    '/Final-Proyect/metadata' => ['Metadata', 'metadata.php'],
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
    case 'Resguardo':
        include './Vista/HTML/' . $rutas[$request][1];
        break;
    case 'Metadata':
        include './Vista/HTML/' . $rutas[$request][1];
        break;
    case 'Ong':
        include './Vista/HTML/' . $rutas[$request][1];
        break;
    case 'Video':
        include './Vista/HTML/' . $rutas[$request][1];
        break;
    default:
        echo "Hi";
        http_response_code(404);
        break;
}

?>