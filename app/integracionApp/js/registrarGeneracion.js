/**
 * Created by franciscomera on 11/16/17.
 */
$(document).ready(function ($) {

    var regForm = $("#registrarGeneracion");
    regForm.validetta({
        onValid: function (event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                cache : false,
                url : 'php/registrarGeneracion.php',
                data : regForm.serialize(),
                success: function (json_data) {
                    var obj = $.parseJSON(json_data);
                    Materialize.toast(obj['mensaje'],1000);
                }
            });
        }
    });
});