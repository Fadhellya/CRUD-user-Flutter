<?php
include_once 'dbconnect.php';
$id = mysqli_real_escape_string($conn, $_POST['id']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);

$query = "UPDATE user SET username='$username', password='$password', email='$email', phone='$phone' WHERE id='$id'";
$execute = mysqli_query($conn, $query);

if ($execute) {
    echo "Data user berhasil diperbarui";
} else {
    echo "Gagal memperbarui data user";
}
?>