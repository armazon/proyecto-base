<?php

class ControladorBase extends \Armazon\Mvc\Controlador
{
    /**
     * @return \Armazon\Bd\Relacional
     */
    public function bd()
    {
        return $this->app->obtenerComponente('bd');
    }

    /**
     * @return \Armazon\I18n\Traductor
     */
    public function traductor()
    {
        return $this->app->obtenerComponente('traductor');
    }

    /**
     * @return \Armazon\Sesion\Manejador
     */
    public function sesion()
    {
        return $this->app->obtenerComponente('sesion');
    }

    /**
     * @return \Armazon\Mvc\Vista
     */
    public function vista()
    {
        return $this->app->obtenerComponente('vista');
    }

    public function inicializar()
    {
        $sesion = $this->sesion();

        // Obtenemos Id de sesión a traves de galleta
        if (isset($this->peticion->galletas[$sesion->obtenerNombre()])) {
            $sesion->definirId($this->peticion->galletas[$sesion->obtenerNombre()]);
        }

        // Iniciamos la sesión
        $sesion->iniciar();

        $this->app->registrarEvento('terminar_peticion', function(\Armazon\Http\Respuesta $respuesta) use ($sesion) {
            $respuesta->agregarGalleta($sesion->obtenerNombre(), $sesion->obtenerId());
            $sesion->cerrar();
        }, true);
    }

}
