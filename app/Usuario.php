<?php

/**
 * Created by PhpStorm.
 * User: franciscomera
 * Date: 11/14/17
 * Time: 8:17 PM
 */
class Usuario
{
    private $id_user;
    private $user_name;
    private $contrasena;
    private $ultimaConexion;

    public function __construct($id,$name,$pwd,$lastC)
    {
        $this->id_user = $id;
        $this->user_name = $name;
        $this->contrasena = $pwd;
        $this->ultimaConexion = $lastC;
    }

}