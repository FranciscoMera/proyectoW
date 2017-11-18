<?php
session_start();
if(!isset($_SESSION['idUserName'])||!isset($_SESSION['userName'])||!isset($_SESSION['idTipoUserName'])){
    header("../../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>Anuarios de ESCOM | Iniciar Sesión</title>
    <!--Google Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fuente-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <!--materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css" media="screen,projection"/>
    <link href="../../css/validetta.css" rel="stylesheet" type="text/css" media="screen" >
    <!--Buscador optimizado para dispositivos mobiles-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Jquery-->
    <script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
    <!--Materialize.js-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/validetta.min.js"></script>

</head>
<body>

<?php
include_once('menu.php');
?>
    <div class="row">
        <div class="col 4 offset-l4">
            <h1 class="indigo-text" style="font-weight: bolder">Gestionar Graduaciones</h1>
        </div>
    <div class="row">
        <div class="col 3 offset-l7">
            <a class="btn waves-light #1565c0 blue darken-3" href="registrarGeneracionForm.php"><i class="material-icons left">class</i> Registrar Graduaci&oacute;n</a>
        </div>
    </div>

    </div>
    <div class="row">
        <table class="col s6 offset-l3 highlight stripped bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre de Generación</th>
                <th>Gestionar Eventos</th>
                <th>Gestionar Alumnos</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    require_once ('../config/config.php');
                    $sql  =  "SELECT * FROM tgn01_generacion";
                    if($result = mysqli_query($con,$sql)){
                        if(mysqli_num_rows($result) > 0){
                            /*Mostrar cada fila del resultado*/
                        }else{
                           echo "<script>Materialize.toast('No hay generaciones registradas',2000)</script>";
                        }
                    }

                ?>
            </tbody>
        </table>
    </div>





</body>
</html>