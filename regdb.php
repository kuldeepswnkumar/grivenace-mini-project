<?php
$sername = "localhost";
$usrname = "root";
$password = "";
$dbname = "registration_db";

$conn = mysqli_connect($sername, $usrname, $password, $dbname);

if($conn){
    // echo "connection done!";
}else{
    echo "connection failed". mysqli_connect_error();
}
?>
