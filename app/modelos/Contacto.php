<?php

class Contactos extends \Armazon\Mvc\ModeloRelacional
{
    public $id;
    public $nombre;
    public $apellidos;
    public $sexo;
    public $codigo_postal;
    public $empresa;
    public $email;
    public $telefono;
    public $celular;
    public $direccion;
    public $ciudad;
    public $pais;
    public $fecha_cre;
    public $fecha_mod;

    protected static $nombreTabla = 'contactos';
    protected static $llavePrimaria = 'id';
    protected static $campos = [
        'id'                    => ['tipo' => 'num', 'requerido' => true],
        'nombre'                => ['tipo' => 'txt', 'requerido' => true],
        'apellidos'             => ['tipo' => 'txt', 'requerido' => true],
        'sexo'                  => ['tipo' => 'txt', 'requerido' => false],
        'codigo_postal'         => ['tipo' => 'txt', 'requerido' => false],
        'empresa'               => ['tipo' => 'txt', 'requerido' => false],
        'email'                 => ['tipo' => 'txt', 'requerido' => true],
        'telefono'              => ['tipo' => 'txt', 'requerido' => false],
        'celular'               => ['tipo' => 'txt', 'requerido' => false],
        'direccion'             => ['tipo' => 'txt', 'requerido' => false],
        'ciudad'                => ['tipo' => 'txt', 'requerido' => false],
        'pais'                  => ['tipo' => 'txt', 'requerido' => false],
        'fecha_cre'             => ['tipo' => 'txt', 'requerido' => false],
        'fecha_mod'             => ['tipo' => 'txt', 'requerido' => false],
    ];
}
