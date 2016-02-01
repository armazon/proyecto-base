<?php

class ControladorBase extends \Armazon\Mvc\Controlador
{
    /**
     * @return \Armazon\Bd\Relacional
     */
    public function bd()
    {
        return $this->bolsa['bd'];
    }

    /**
     * @return \Armazon\I18n\Traductor
     */
    public function traductor()
    {
        return $this->app['traductor'];
    }
}
