<?php

class PruebaControlador extends ControladorBase
{
    public function inicio()
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
        $this->vista->idioma = 'Titulo de Ejemplo';
        $this->vista->definirPlantilla('ejemplo');

        $this->vista->renderizar('portada');
    }
} 
