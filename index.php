<?php
$rutas = [
    '/' => ['Página principal', 'prueba.html'],
    '/mantenimiento' => ['Mantenimiento', 'prueba.html'],
    '/privacidad' => ['Privacidad', 'prueba.html'],
];

$request = $_SERVER['REQUEST_URI'];
if($request[0] != '/') {
    $request = '/' . $request;
}
$partes = explode('?', $request);
$request = $partes[0];

print_r(__DIR__);
print_r($rutas);
// Verificar si hay página o no
if(isset($rutas[$request])) {
    // Incluir el PHP adecuado
    include __DIR__ . './Vista/HTML/' . $rutas[$request][1];
} else {
    // La página no existe
    http_response_code(404);
    // include './Vista/HTML/prueba.html';
}
?>