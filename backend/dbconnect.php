<?php
define('DB_HOST', 'localhost');
define('DB_USER', '//namauser');
define('DB_PASS', '//masukkanpassword');
define('DB_NAME', '//namadatabase');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQ Server : " . mysqli_connect_error();
    die();
}
?>