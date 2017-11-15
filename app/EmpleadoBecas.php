<?php

/**
 * Created by PhpStorm.
 * User: franciscomera
 * Date: 11/14/17
 * Time: 8:11 PM
 */
class EmpleadoBecas
{
    private $id_empleado;
    private $nombrePila;
    private $primerApellido;
    private $segundoApellido;
    private $ultimaConexion;

    public function __construct($id_empleado,$nombre,$primerAp,$segundoAp,$lastC)
    {
        $this->id_empleado= $id_empleado;
        $this->nombrePila = $nombre;
        $this->primerApellido = $primerAp;
        $this->segundoApellido = $segundoAp;
        $this->ultimaConexion = $lastC;

    }
}