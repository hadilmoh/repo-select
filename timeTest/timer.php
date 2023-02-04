<?php


$timecountdownend = strtotime("2023-02-02 13:40:01");
$timecountdownendstart = strtotime("+2 hour");
$timeleft = $timecountdownend - $timecountdownendstart;

if(isset($_POST["type"]) === true && $_POST["type"] == "timerupdate")
{
    if($timeleft <= 0){
        
        $timeleft = 0;
        echo ($timeleft);

    }else{
    echo ($timeleft);
}
}