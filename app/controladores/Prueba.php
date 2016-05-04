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

        $vista = $this->vista();
        $vista->idioma = 'es';
        $vista->titulo = 'Titulo de Ejemplo';
        $vista->definirPlantilla('ejemplo');
        $vista->renderizar('portada');

        return $vista;
    }

    public function listado()
    {
        if (isset($this->ruta->parametros['formato']) && $this->ruta->parametros['formato'] == 'json') {
            $this->respuesta->definirTipoContenido('json');
            $this->respuesta->definirContenido(json_encode(['Lista', 'de', 'ejemplo']));
        }
    }

    public function detalle($id)
    {
        $this->vista()->id = $id;
        $this->vista()->renderizar('ejemplo');

        return $this->vista();
    }
}
