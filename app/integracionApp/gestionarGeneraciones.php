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
<body background="img/escom.jpg" style="background-repeat: no-repeat;background-position: center;background-attachment: fixed;">

<?php
include_once('menu.php');
?>




</body>
</html>