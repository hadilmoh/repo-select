<?php

$con = mysqli_connect("localhost","root","","ticket");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

if(isset($_POST['status_tk'])  && !empty($_POST['tkID'])) {

    $status_tk = $_POST['status_tk'];

    $query_st = "UPDATE ticket SET `status` = '$status_tk' WHERE id = '1'";
    $query_run_st = mysqli_query($con, $query_st);
 
}

