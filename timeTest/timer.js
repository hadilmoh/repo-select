$(function()
{
    var timertext = $("[timer]");

    setInterval(function()
    {
    $.post("timer.php", {type : "timerupdate"}, function(data)
    {
        timertext.html("Time Left: " + data + " seconds.</p>")
    });

}, 1000);

});