
/**
 * Created by franciscomera on 11/14/17.
 */
$(document).ready(function () {
    var loginFormulario = $('#loginForm');
    loginFormulario.validetta();
    loginFormulario.on('submit',function (e) {

        e.preventDefault();


        var username = $('[name="username"]').val();
        var password = $('[password="password"]').val();


        $.ajax({
            type: "POST",
            url: 'log.php',
            cache:'false',
            data: {username: username, password: password},
            success: function (json_data) {
                    var obj = $.parseJSON(json_data);
                    if(obj['estado'] == 0){
                        Materialize.toast(obj['mensaje'],1000);
                    }
                }
            });

    })
});