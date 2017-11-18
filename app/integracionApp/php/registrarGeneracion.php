<?php
/**
 * Created by PhpStorm.
 * User: franciscomera
 * Date: 11/16/17
 * Time: 10:28 PM
 */

include("../../config/config.php");

$nombre_generacion = $_POST['nombre_generacion'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre_generacion = trim($_POST['nombre_generacion']);
    if(empty($nombre_generacion)){
        $error = array('estado'=>0,'mensaje'=>'Escribe el nombre de la generación.');
        echo json_encode($error);
    }

    $sql = "INSERT INTO tgn01_generacion VALUES ('NULL' ,?)";
    if($stmt = mysqli_prepare($con,$sql)){
        mysqli_stmt_bind_param($stmt,"s",$param_nombre_generacion);
        $param_nombre_generacion = $nombre_generacion;
        if(mysqli_stmt_execute($stmt)){
            $respuesta = array('estado'=>1,'mensaje'=>$nombre_generacion . ' registrada correctamente');
            echo json_encode($respuesta);
        }else{
            $error = array('estado' =>0 ,'mensaje' =>'Hubo en error durante el registro, intentalo más tarde.');
            echo json_encode($error);
        }
        mysqli_stmt_close($stmt);
    }

    mysqli_close($con);
}else{
    http_response_code(500);
    $error = array('estado' =>0 ,'mensaje' =>'Hubo en error en la conexión, intentalo más tarde.');
    echo json_encode($error);
}

