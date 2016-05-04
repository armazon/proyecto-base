<?php

// Instanciamos Aplicación Web
$app = \Armazon\Nucleo\Aplicacion::instanciar();


// Configuramos aplicación
$app->definirDirApp(__DIR__);
$app->definirCodificacion('UTF-8');
$app->definirZonaTiempo('America/Managua');
$app->definirAmbiente(getenv('AMBIENTE') ?: 'desarrollo');


// Registramos componente Traductor
$app->registrarComponente('traductor', function() use ($app) {
    return new \Armazon\I18n\Traductor($app);
});


// Registramos componente Sesion
$app->registrarComponente('sesion', function() {
    $adaptador = new \Armazon\Sesion\Adaptador\Archivos([
        'dir' => sys_get_temp_dir()
    ]);
    $sesion = new Armazon\Sesion\Manejador($adaptador);

    return $sesion;
});


// Registramos componente Vista ** REQUERIDO **
$app->registrarComponente('vista', function () use ($app) {
    $vista = new \Armazon\Mvc\Vista($app);

    // Registramos traductor en la vista como procesador
    $traductor = $app->obtenerComponente('traductor');
    $vista->registrarFiltro('_', function ($texto) use ($traductor) {
        return $traductor->t($texto);
    });

    return $vista;
});


// Registramos componente para consultar base de datos relacional
$app->registrarComponente('bd', function () use ($app) {
    return new \Armazon\Bd\Relacional([
        'dsn' => 'mysql:host=127.0.0.1;dbname=prueba;charset=utf8;',
        'usuario' => 'root',
        'contrasena' => '',
        'comando_inicial' => null,
    ]);
});


// Preparamos la aplicación para su debida ejecución
$app->preparar();


// Devolvemos la instancia de aplicación
return $app;
