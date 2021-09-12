<?php 

include("config.php");

$name = $_POST['name'];
$email = $_POST['email'];
$usn = $_POST['usn'];
$password = MD5($_POST['password']);


$sql = "INSERT INTO students(name, email, password, usn) VALUES ('".$name."','".$email."','".$password."','".$usn."')";
if(mysqli_query($conn, $sql)){
    echo("<script LANGUAGE='JavaScript'>window.alert('Registration Successful...');window.location.href='login.html';</script>");
}

?>