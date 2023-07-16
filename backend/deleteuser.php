<?php
include_once 'dbconnect.php';
if(isset($_POST["id"])){
    $id =$_POST["id"]; 
}else{
    return;
}
$query = "DELETE FROM user WHERE id = '$id'";
$execute = mysqli_query($conn,$query);
$arruser = [];
if($execute){
    $arruser["success"]="true";
}else{
    $arruser["gagal"]="false";
}
print(json_encode($arruser));
?>