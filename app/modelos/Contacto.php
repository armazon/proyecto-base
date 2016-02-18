<?php

class Contactos extends \Armazon\Mvc\ModeloRelacional
{
    public $id;
    public $nombre;
    public $apellidos;
    public $sexo;
    public $cpostal;
    public $empresa;
    public $email;
    public $telefono;
    public $celular;
    public $direccion;
    public $ciudad;
    public $pais;
    public $fecha_cre;
    public $fecha_mod;

    public $nombreTabla = 'contactos';
    public $llavePrimaria = 'id';
    public $campos = [
        'id'            => ['tipo' => 'num', 'requerido' => true],
        'nombre'        => ['tipo' => 'txt', 'requerido' => true],
        'apellidos'     => ['tipo' => 'txt', 'requerido' => true],
        'sexo'          => ['tipo' => 'txt', 'requerido' => false],
        'cpostal'       => ['tipo' => 'txt', 'requerido' => false],
        'empresa'       => ['tipo' => 'txt', 'requerido' => false],
        'email'         => ['tipo' => 'txt', 'requerido' => true],
        'telefono'      => ['tipo' => 'txt', 'requerido' => false],
        'celular'       => ['tipo' => 'txt', 'requerido' => false],
        'direccion'     => ['tipo' => 'txt', 'requerido' => false],
        'ciudad'        => ['tipo' => 'txt', 'requerido' => false],
        'pais'          => ['tipo' => 'txt', 'requerido' => false],
        'fecha_cre'     => ['tipo' => 'txt', 'requerido' => false],
        'fecha_mod'     => ['tipo' => 'txt', 'requerido' => false],
    ];
}
