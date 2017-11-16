<?php
/**
 * Created by PhpStorm.
 * User: franciscomera
 * Date: 11/13/17
 * Time: 9:04 PM
 */

include("app/config/config.php");

$username = $_POST['username'];
$password = $_POST['password'];


if($_SERVER["REQUEST_METHOD"] == "POST"){

        $sql = "SELECT id_usuario,nb_nombre_usuario, tx_contrasena,id_tipo_usuario FROM tus01_usuario WHERE nb_nombre_usuario = ?";
        if($stmt = mysqli_prepare($con, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id_usuario,$username,$hashed_password,$tipo_usuario);

                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $hashed_password){
                            /*La contraseña es la correcta*/
                            session_start();
                            $_SESSION['idUserName'] = $id_usuario;
                            $_SESSION['userName'] = $username;
                            $_SESSION['idTipoUserName'] = $tipo_usuario;
                            if($tipo_usuario == '1'){
                                $respuesta = array('estado'=>1,'idTipoUsuario' => 1);
                                echo json_encode($respuesta);
                            }else if($tipo_usuario =='2'){
                                $respuesta = array('estado'=>1,'idTipoUsuario' => 2);
                                echo json_encode($respuesta);
                            }else{
                                $respuesta = array('estado'=>1,'idTipoUsuario' => 3);
                                echo json_encode($respuesta);
                            }

                        }else{
                            $error = array('estado'=>0,'mensaje'=>'Contraseña incorrecta');
                            echo json_encode($error);
                        }
                    }

                }else{

                    $error = array('estado'=>0,'mensaje'=>"No existe un usuario con ese nombre");
                    echo json_encode($error);

                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con);
}else{
    http_response_code(500);
    echo "Algo no salió bien";
}
