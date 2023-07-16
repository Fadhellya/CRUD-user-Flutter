<?php
include_once 'dbconnect.php';
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$phone = mysqli_real_escape_string($conn,$_POST['phone']);

$query = "INSERT INTO user (username,password,email,phone) VALUES('$username','$password','$email','$phone')";
$execute = mysqli_query ($conn,$query);
if($execute>0){
    echo"Data user berhasil ditambahkan";
}else{
    echo"Gagal menambahkan data user";
}
?>