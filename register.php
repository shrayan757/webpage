<?php 

include("config.php");

$name = $_POST['name'];
$email = $_POST['email'];
$usn = $_POST['usn'];
$password = MD5($_POST['password']);

$sql = mysqli_query($conn, "SELECT * FROM students WHERE email = '".$email."' ");
$rows = mysqli_fetch_assoc($sql);
$num = mysqli_num_rows($sql);

if ($num == 1) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Email already exists');window.location.href='register.html';</script>");
}
else{
    $sql1 = "INSERT INTO students(name, email, password, usn) VALUES ('".$name."','".$email."','".$password."','".$usn."')";
    if(mysqli_query($conn, $sql1)){
        echo("<script LANGUAGE='JavaScript'>window.alert('Registration Successful...');window.location.href='login.html';</script>");
    }
}

?>