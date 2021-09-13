<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db( $connection , "industrial_attachment_db",);
session_start();

if($admin_check=$_SESSION['login_admin']){
$admin_qr=mysqli_query($connection ,"select * from admin_login where username='$admin_check'" );
$row_admin = mysqli_fetch_assoc($admin_qr);
$admin_session = $row_admin['firstname'];
    }


if(!isset($admin_session)){
mysqli_close($connection); 
header('Location:index.php'); 
}
?>
