<?php
include'dbconnection.php';
// $db = new mysqli('localhost', 'root', '', 'industrial_attachment_db');
$link = mysqli_connect("localhost", "root", "", "industrial_attachment_db") or die($link);

 
  if(isset($_POST['login'])){
	 session_start();
	 $usertype = mysqli_real_escape_string($link, $_POST['usertype']);
	 $username = mysqli_real_escape_string($link, $_POST['username']);
	 $pass = md5($_POST['password']);
	 $password = mysqli_real_escape_string($link, $pass);


	//   $usertype = $_POST['usertype'];
	//   $username = $_POST['username'];
	//   $pass = md5($_POST['password']);
	//   $password=(mysqli_real_escape_string($pass));
	 
	 
	 
	 $user_query = "select * from  user_details where regno = '$username' and password = '$password'";
	 $user_result = mysqli_query($link ,$user_query) ;
	 

	 $admin_query = "select * from admin_login where username = '$username' and password = '$password'";
	  $admin_result = mysqli_query($link ,$admin_query);
	 
	 
	 if($usertype==""){
	header('Location:index.php?msg=- select user -');	 
		 
	 }
	 
	if($user_row=mysqli_fetch_array($user_result)>0 and ($usertype=='user'))  {
		$_SESSION['login_user']=$username;
		 //header("location:user_panel.php?action=add&id");
		 ?>	
		 <script type="text/javascript">
		window.location = 'user_panel.php?action=add&id=<?php echo $rows["id"]; ?>"';
			</script>
		
	<?php	}
	else if($admin_row = mysqli_fetch_array($admin_result)>0 and ($usertype=='admin')){
		$_SESSION['login_admin']=$username;
		header("location:admin_panel.php");			
		}
	else{
		header('Location:index.php?msg=- invalid credentials -');
		}  
	  
	  
	  }
?>