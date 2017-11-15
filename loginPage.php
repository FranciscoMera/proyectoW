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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link href="css/validetta.css" rel="stylesheet" type="text/css" media="screen" >
    <!--Buscador optimizado para dispositivos mobiles-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Jquery-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!--Materialize.js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/validetta.min.js"></script>
    <script type="text/javascript" src="js/ajaxResponse.js"></script>

</head>
<body background="img/escom.jpg" style=" background-repeat: no-repeat;background-attachment: fixed;background-position:center">
    <?
      include_once('index/indexHeader.php');

    ?>


    <!--Formulario de Login-->
    <div class="row">
        <div class="card col s6 indigo-text" style="margin-left:25%;margin-top:4%; ">
            <form class="col s12" id="loginForm" action="" method="post">
                <div class="row">
                    <h1 style="font-weight: bolder">Iniciar Sesión</h1>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="username" id="icon_prefix" type="text" class="validate" data-validetta="required">
                        <label for="icon_prefix">Nombre de Usuario</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input name="password" id="icon_prefix" type="password" class="validate" data-validetta="required">
                        <label for="icon_prefix">Contrase&ntilde;a</label>
                    </div>
                </div>
                <div class="row">
                    <div class="indigo-text col s3 offset-l9">
                        <a href="recordarContrasena.php">Recordar Contrase&ntilde;a</a>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3 offset-l9">
                        <input value="Iniciar Sesi&oacute;n" type="submit" name="submit" class="waves-effect waves-light btn #1565c0 blue darken-3">
                    </div>
                </div>
            </form>
        </div>
    </div>




    <?
         include_once('index/footer.php');
    ?>

</body>
</html>