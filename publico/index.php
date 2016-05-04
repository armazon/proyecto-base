<?php

// Enrutamos recursos estáticos si usamos servidor embedido CLI
if (php_sapi_name() == 'cli-server') {
    $camino = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (is_file(__DIR__ . $camino)) {
        return false;
    }
}

// Incluimos autocargador de Composer
require __DIR__ . '/../vendor/autoload.php';

// Obtenemos la instancia de la aplicación
$app = include __DIR__ . '/../app/instancia.php';

// Obtenemos petición usando variables globales de PHP
$peticion = \Armazon\Http\Peticion::crearDesdeGlobales();

// Procesamos la petición para obtener una respuesta
$respuesta = $app->procesarPetición($peticion);

// Enviamos la respuesta en caso necesario
if (!$respuesta->fueEnviado()) {
    $respuesta->enviar();
}
