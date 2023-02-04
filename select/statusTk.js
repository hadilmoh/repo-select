$(document).ready(function (){
    $("#state").change( function () {
        var s_tk = $(this).val();
        var tk_id = $("#tk_id").val();
        $.ajax({
            type: "POST",
            url: "view-ticket-insert.php",
            data: {
                status_tk : s_tk,
                tkID : tk_id,
            },
            success: function () {

                location.reload();

            }
        });
    });
    
});
