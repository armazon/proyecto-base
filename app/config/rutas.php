<?php

/*

TIPOS DE RUTAS:
[metodo, ruta, acción{, parametros{, estado_http}}]
[estado_http, acción]

TIPOS DE ACCIÓN:
Controlador@metodo
#vista
=url_redirigir

*/

return [
    // Rutas de ejemplo
    ['GET', '/', 'Prueba@portada'],
    ['GET', '/prueba', 'Prueba@listado', ['formato' => 'json']],
    ['GET', '/prueba/:id', 'Prueba@detalle'],

    // Rutas de errores
    [404, '#error'],
    [500, '#error'],
];
