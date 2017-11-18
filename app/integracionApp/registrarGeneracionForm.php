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
    <script type="text/javascript" src="js/registrarGeneracion.js"></script>

</head>
<body>

    <?php
    include_once('menu.php');
    ?>

    <div class="row">
        <div class="card col s6 offset-l3 indigo-text center-align">
            <h1 style="font-weight: bolder;">Registrar Generación</h1>
            <form class="col s12" id="registrarGeneracion" action="" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons medium prefix">school</i>
                        <input placeholder="Generación 2013-2017" name="nombre_generacion" id="icon_prefix" type="text" class="validate" data-validetta="required">
                        <label for="icon_prefix">Nombre de la Generación*</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <a class="col s4 offset-l12 waves-effect waves-light btn #1565c0 red darken-3"><i class="material-icons left">arrow_back</i>Regresar</a>
                    </div>
                    <div class="col s6">
                        <input value="Registrar Generacion" type="submit" name="submit" class="col s6 offset-l4 waves-effect waves-light btn #1565c0 blue darken-3">
                    </div>
                </div>
                <div class="row">
                    <p style="font-weight: lighter">Recuerda que los campos que llevan * son obligatorios</p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>