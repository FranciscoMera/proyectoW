
/**
 * Created by franciscomera on 11/14/17.
 */
$("document").ready(function () {
    $.ajax({
        type: "POST",
        dataType:"Json",
        url:"log.php",
        data: "data",
        success:function (data) {
            $(".errorCard").css("display","block");
            $(".the-return").html("Mensaje:" + data['mensaje']);
        }


    });
});