<?php
include('dbconnection.php');
$action= $_GET['action'];
$id=$_GET["id"];

//include('session.php');
/*if($_POST['save']){
	$dept = $row['dept'];
	//$dept = $_GET['dept'];
	//$dept = $_POST['dept'];
	$fname = $row['fname'];
	//$fname = $_POST['fname'];
	$mname = $row['mname'];
	//$mname = $_POST['mname'];
	$lname = $row['lname'];
	//$lname = $_POST['lname'];
	$regno = $row['regno'];
	//$regno = $_POST['regno'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$period = $_POST['period'];
	$firm_name = $_POST['firm_name'];
	$firm_address = $_POST['firm_address'];
	$county = $_POST['county'];
	$location = $_POST['location'];
	//$letter = $_POST['letter'];
	
	
	$query = "insert into main (dept, fname, mname, lname, regno, phone, email, period, firm_name, firm_address, county, location) values ('$dept', '$fname', '$mname', '$lname', '$regno', '$phone', '$email', '$period', '$firm_name', '$firm_address', '$county', '$location')";
	
	 if(mysql_query($query)){
		
		header('location:user_panel.php');
		
		}
	else{
		echo 'an error occured';
		
		}
}
?>

<?php 



 if($_POST['add_user']){
	$dept = $_POST['dept'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$regno = $_POST['regno'];
	$password=$_POST['password'];
	
	
	$query_user = "insert into user_details (dept, fname, mname, lname, regno, password) values ('$dept', '$fname', '$mname', '$lname', '$regno', '$password')";
	
	 if(mysql_query($query_user)){
		
		//echo 'record saved';
		header('location:add_users.php');
		}
	else{
		echo 'an error occured';
		
		}
}
*/
if($action=="delete")
{
mysql_query("DELETE FROM main WHERE id='$id'") or die(mysql_error());
	header('Location:user_panel.php?');
	
}


?>



