<?php
/**
 * Created by PhpStorm.
 * User: franciscomera
 * Date: 11/13/17
 * Time: 9:04 PM
 */

include("app/config/config.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){

        $sql = "SELECT nb_nombre_de_usuario, tx_contrasena FROM tusr01_usuario WHERE nb_nombre_de_usuario = ?";
        if($stmt = mysqli_prepare($con, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){

                }else{

                    $error = array('estado'=>0,'mensaje'=>"No existe un usuario con ese nombre");
                    echo json_encode($error);

                }
            }
        }
}else{
    http_response_code(500);
    echo "Algo no salió bien";
}
