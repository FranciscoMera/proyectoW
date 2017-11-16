<?php
session_start();
/**
 * Created by PhpStorm.
 * User: franciscomera
 * Date: 11/16/17
 * Time: 1:14 AM
 */

class IntegracionSocial
{
    private $id_empleado_integracion;
    private $id_usuario;
    private $nombre_Pila;
    private $primer_Apellido;
    private $segundo_Apellido;

    public function __construct($mysqli_result)
    {
        $this->id_empleado_integracion = $mysqli_result['id_integracion_social'];
        $this->id_usuario = $mysqli_result['id_usuario'];
        $this->nombre_Pila = $mysqli_result['nb_nombre_pila'];
        $this->primer_Apellido = $mysqli_result['nb_primer_apellido'];
        $this->segundo_Apellido = $mysqli_result['nb_segundo_apellido'];

    }

    public function getNombreEmpleado(){
        return $this->nombre_Pila." ".$this->primer_Apellido." ".$this->segundo_Apellido;
    }

    public function getPuesto(){


        $sql = "SELECT nb_nombre_tipo FROM tus01_usuario JOIN tus02_tipo_usuario WHERE tus02_tipo_usuario.id_tipo_usuario = ?";

        if($stmt = mysqli_prepare($con, $sql)){
            mysqli_stmt_bind_param($stmt,'i',$param_i);
            $param_i = trim($_SESSION['idTipoUserName']);

            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    return $row['nb_nombre_tipo'];

                }


            }
        }
        return null;
    }




}
