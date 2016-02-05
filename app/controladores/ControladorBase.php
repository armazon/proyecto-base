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
}
