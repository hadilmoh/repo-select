<!DOCTYPE html>
<html>
<head>
    <!-- start css files -->
            <!-- botstrap link -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
            <!-- datatable link -->
        <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!-- this link i get it from youtube video to put icon -->
        <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
            <!-- rendear allelement normaly -->
        <link rel="stylesheet" href="css/normalize.css">
            <!-- font Awesome Library -->
        <link rel="stylesheet" href="css/all.min.css">
            <!-- master file -->
        <link rel="stylesheet" href="css/master.css">
        <!-- end css files -->
        <!-- google fonts  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Work+Sans:wght@200;400;600;700&display=swap" rel="stylesheet">
        <!-- end google fonts  -->
        <!-- sweetalert2 -->
        <link rel="stylesheet" href="sweetalert2.min.css">

<style>
    * {
    font-family: "Open Sans", sans-serif;
    font-size: 50px;
    padding: 10px;
    margin: 5px;
    }
</style>
</head>
<body>
    

<?php
$con = mysqli_connect("localhost","root","","ticket");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

$query = "SELECT * FROM ticket WHERE id = '1'";
$query_run = mysqli_query($con, $query);
foreach($query_run as $result){
    $i=$result["id"];
    $status_tk=$result["status"];
}

 ?>
 <center>
 <input class="d-none" id="tk_id" type="text" value="<?php echo $i; ?>">
 <input class="d-none" id="status_tk" type="text" value="<?php echo $status_tk; ?>">

<h3>Status :</h3>
<select id="state" aria-label="Default select example">
    <option selected value="On hold">On hold</option> <!-- هنا المؤقت 0 ويبدأ فقط عند تغيير الحالة الي بروجريس-->
    <option value="In Progress">In Progress</option> <!-- هنا يبدا المؤقت ف حساب المدة الزمنية تنازليا -->
    <option value="Spam">Spam</option>
    <option value="Closed">Closed</option> <!--  هنا المؤقت يقف ع الوقت الذي وصل اليه  -->
</select>
</center>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>        
    $(document).ready(function (){
        var s_tk = $("#status_tk").val();  
        $('#state option').each(function() {
            if($(this).val() == s_tk) {
                $(this).prop("selected", true);
            }
        });
    });
    
</script>

<script src="statusTk.js"></script>

</body>
<html>