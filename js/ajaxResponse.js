
/**
 * Created by franciscomera on 11/14/17.
 */
$(document).ready(function ($) {

    var loginFormulario = $('#loginForm');
    loginFormulario.validetta({
        onValid:function (event) {
            event.preventDefault();
            var username = $('[name="username"]').val();
            var password = $('[password="pwd"]').val();
            $.ajax({
                type: "POST",
                url: 'log.php',
                cache:'false',
                data: loginFormulario.serialize(),
                success: function (json_data) {
                    var obj = $.parseJSON(json_data);
                    if(obj['estado'] == 0){
                        Materialize.toast(obj['mensaje'],1000);
                    }else{
                        if(obj['idTipoUsuario'] == 1){
                            window.location.href = "app/integracionApp/indexIntegracion.php";
                        }
                        if(obj['idTipoUsuario'] == 2){
                            window.location.href = "app/alumnoApp/indexAlumno.php";

                        }
                        if(obj['idTipoUsuario'] == 3){
                            window.location.href = "app/secretarioApp/indexSecretario.php";
                        }
                    }
                }
            });
        }
    });
});