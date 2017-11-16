<?php
    session_start();
    if(!isset($_SESSION['idUserName'])||!isset($_SESSION['userName'])||!isset($_SESSION['idTipoUserName'])){
    header("../../index.php");
    }
    include_once ("../config/config.php");
    include ('IntegracionSocial.php');

    $id_user = $_SESSION['idUserName'];



    $sql = "SELECT * FROM tescom02_integracion_social WHERE id_usuario = ?";

    if($stmt = mysqli_prepare($con,$sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = trim($id_user);

        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $empleadoIntegracion = new IntegracionSocial($row);

            }
        }

    }
?>

<nav>
    <div class="nav-wrapper ">
        <a href="indexIntegracion.php">Anuarios ESCOM</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="gestionarGeneraciones.php"><i class="material-icons left">school</i>Gestionar Generaciones</a></li>
            <li><a href="consultarPerfil.php"><i class="material-icons right">account_circle</i><?php echo $empleadoIntegracion->getNombreEmpleado() ?></a></li>
            <li><a href="php/logout.php" class="waves-effect waves-light btn #1565c0 blue darken-3">Cerrar Sesión</a></li>
        </ul>
    </div>
</nav>