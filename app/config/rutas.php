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
    ['GET', '/', 'Portada@inicio'],
    ['GET', '/prueba', 'Usuarios@listado'],
    ['GET', '/prueba/:id', 'Usuarios@detalle'],
    ['POST', '/usuario/nada', 'Usuarios@nada', ['id' => 123], 400],
    ['GET', '/usuario/nada', '=http://google.com', null, 303],

    // Rutas de errores
    [404, '#error'],
];
