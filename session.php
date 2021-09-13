<?php
//include 'dbconnection.php';
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("industrial_attachment_db", $connection);
session_start();// Starting Session
// Storing Session

if($user_check=$_SESSION['login_user']){
// SQL Query To Fetch Complete Information Of User
$user_qr=mysql_query("select * from user_details where regno='$user_check'", $connection);
$row = mysql_fetch_assoc($user_qr);
$login_session =$row['fname'];
}
 /*if($user_check=$_SESSION['login_admin']){
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from admin_login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['firstname'];
}*/


if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
