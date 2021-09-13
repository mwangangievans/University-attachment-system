<?php include'session.php';  ?>
<?php include'dbconnection.php';  ?>
<!DOCTYPE html>
<head>

<title>RESET PASSWORD</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php include'header_reset.php';  ?>
</head>

<body onLoad=startTime()>
<div id="wrapper_reset">

<center>
<form method="post"  >
  <fieldset style="width:400px; padding:30px; border-radius:10px;">
      <table align="center">
	  <tr>
	   <td colspan="2" align="center">
	    <span style="color:#FF0066; font-size:17px; font-weight:bold; ">  
	     <?php if (isset($_GET['msg'])){ ?>
			<?php echo $_GET['msg'];  ?>
	     <?php } ?> 
        </span>
	   </td>
	  </tr>
        <tr>
          <td>
         Old Password
          </td>
          
           <td>
       <input type="password" class="textbox" name="oldpass" placeholder="enter the old password" required/>
          </td>
        </tr>
        
         <tr>
          <td>
         New Password
          </td>
          
           <td>
       <input type="password" name="newpass" placeholder="enter the new password" class="textbox" required/>
          </td>
        </tr>
        
         <tr>
          <td>
         Confirm Password
          </td>
          
           <td>
       <input type="password" name="cpass" placeholder="re-enter password" class="textbox" required/>
          </td>
        </tr>
        
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td colspan="2"> <hr width="90%"></td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        
         <tr>
          <td colspan="2" align="center">
       <input type="submit" name="save" value="Save" class="button"/>
       &nbsp;&nbsp;&nbsp;&nbsp;
       
      <input type="reset" name="reset" value="Clear" class="button"/>  
          </td>
        </tr>
        
      </table>
  </fieldset> 
</form>
</center>


</div>
</body>
</html>

<?php
if(isset($_POST['save'])){
	$regno = $row['regno'];
	$oldpass =md5($_POST['oldpass']);
	$newp =$_POST['newpass'];
	$newpass = md5($newp);
	$cp =$_POST['cpass'];
	$cpass = md5($cp);
if($oldpass == $row['password'] and $newpass == $cpass){
	
	$query_update= "update user_details  set password = '$newpass' where regno = '$regno'";
	mysql_query($query_update);
header('location:reset_password.php?msg=Password Changed Successfully');
	}	
else{
	echo "<script>alert('invalid old password')</script>";
	
	}
	
	}


?>