<?php
//setting default timezone                       
date_default_timezone_set("Asia/Kuala_Lumpur");
//echo date('d-m-Y H:i:s'); //Returns IST
session_start();

include_once "conn.php";

//connection
//$con = mysqli_connect('host_name', 'user_name', 'password', 'db_name');
$con = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

//function base_url
function base_url($url = null) {
    $base_url = "http://localhost/clinic";
    if($url != null) {
        return $base_url."/".$url;
    }else{
        return $base_url;
    }
}

//function date
function date_mas($dt) {
    $day = substr($dt, 8,2);
    $month = substr($dt, 5,2);
    $year = substr($dt, 0,4);
    return $day."/".$month."/".$year;
}
?>