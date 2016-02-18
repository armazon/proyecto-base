<?php

class PruebaControlador extends ControladorBase
{
    public function portada()
    {
//        $contacto = $this->bd()
//            ->seleccionar('*', 'contactos')
//            ->donde(['id|num' => 3])
//            ->cache('prueba')
//            ->obtener(null, 'cuenta_id', 'Contacto');

//        $contacto = new Contacto();

//        $contacto = Contacto::buscar(3);

//        $contactos = Contacto::buscar();

        $this->vista->idioma = 'es';
        $this->vista->titulo = 'Titulo de Ejemplo';
        $this->vista->definirPlantilla('ejemplo');

        $this->vista->renderizar('portada');
    }

    public function listado()
    {
        if (isset($this->parametros['formato']) && $this->parametros['formato'] == 'json') {
            $this->respuesta->definirTipoContenido('json');
            $this->respuesta->definirContenido(json_encode(['Lista', 'de', 'ejemplo']));
        }
    }

    public function detalle()
    {
        $this->vista->id = $this->parametros['id'];
        $this->vista->renderizar('ejemplo');
    }
}
