<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException; 

//echo $uuid4->toString(); 

if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $name = trim(mysqli_real_escape_string($con, $_POST['name']));
    $ic = trim(mysqli_real_escape_string($con, $_POST['ic']));
    //$username = trim(mysqli_real_escape_string($con, $_POST['username']));
    $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $date = trim(mysqli_real_escape_string($con, $_POST['date']));
    $lvl = trim(mysqli_real_escape_string($con, $_POST['lvl']));
    $sql_check_ic = mysqli_query($con, "SELECT * FROM tb_user WHERE ic_user = '$ic'") or die (myqsli_error($con));
    if(mysqli_num_rows($sql_check_ic) > 0) {
        echo "<script>alert('Error! The user IC is duplicate.'); window.location='add.php';</script>";
    } else {
    mysqli_query($con, "INSERT INTO tb_user (id_user, name_user, ic_user, password, email, date, level) VALUES ('$uuid', '$name', '$ic', '$pass', '$email', '$date', '$lvl')") or die (myqsli_error($con));
    echo "<script>window.location='data.php';</script>"; 
    }

} else if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = trim(mysqli_real_escape_string($con, $_POST['name']));
    $ic = trim(mysqli_real_escape_string($con, $_POST['ic']));
    //$username = trim(mysqli_real_escape_string($con, $_POST['username']));
    $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $lvl = trim(mysqli_real_escape_string($con, $_POST['lvl']));
    $sql_check_ic = mysqli_query($con, "SELECT * FROM tb_user WHERE ic_user = '$ic' AND id_user != '$id'") or die (myqsli_error($con));
    if(mysqli_num_rows($sql_check_ic) > 0) {
        echo "<script>alert('Error! The user IC is duplicate.'); window.location='add.php';</script>";
    } else {
        mysqli_query($con, "UPDATE tb_user 
        SET ic_user = '$ic', name_user = '$name', password = '$pass', email = '$email', level = '$lvl' 
        WHERE id_user = '$id'") or die (myqsli_error($con));
        echo "<script>window.location='data.php';</script>"; 
    }
}
?>