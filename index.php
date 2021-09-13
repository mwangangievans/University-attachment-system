

 
 <?php
include('login.php'); 
include('dbconnection.php');

/*$username = $_SESSION['login_user'];
$query_view = "select * from main where regno ='$username'";
 $result_view =mysql_query($query_view) or die (mysql_error());
 $rows = mysql_fetch_array($result_view);
*/


if(isset($_SESSION['login_user'])){
//header("location: user_panel.php");
$username = $_SESSION['login_user'];
$query_view = "select * from main where regno ='$username'";
 $result_view =mysqli_query($query_view) or die (mysqli_error());
 $rows = mysqli_fetch_array($result_view);
?>
<script type="text/javascript">
window.location ='user_panel.php?action=add&id=<?php echo $rows["id"]; ?>"';
</script>
<?php }
/*
else if(isset($_SESSION['login_admin'])){
header("location: admin_panel.php");
}*/

?>
<!DOCTYPE html>
<head>
<title>Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="images/login.png" rel="shortcut icon"/>
</head>

<body>
<div id="content">
<br><br>
<h1 align="center">UNIVERSITY INDUSTRIAL ATTACHMENT <br> MONITORING SYSTEM</h1>

<center>
<form action="" method="post" >
   <fieldset id="fieldset">
   
   <table>
      <tr>
       
         <td colspan="2" align="center" style="color:#F00;">
         <b> &nbsp;
          <?php if (isset($_GET['msg'])){ ?>
			
			<?php echo $_GET['msg'];  ?>
			
			<?php } ?>
          &nbsp;</b>
        </td>
       
      </tr>
      <tr>
        <td>USER TYPE</td>
        <td>
        <select class="combo" name="usertype">
          <option value="" selected>select user type</option> 
          <option value="admin">Admininstrator</option> 
          <option value="user">User</option> 
        </select>        
        </td>
      </tr>
   
      <tr>
        <td>USERNAME</td>
        <td>
        <input type="text" name="username" placeholder="enter username" class="textbox" autocomplete="off"/>
        </td>
      </tr>
      
      <tr>
        <td>PASSWORD</td>
        <td>
        <input type="password" name="password" placeholder="enter password" class="textbox" autocomplete="off"/>
        </td>
      </tr>
      
      <tr>
       <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
       <td colspan="2"><hr width="90%" color="#FFFFFF"></td>
      </tr>
      
       
      
      <tr>
       <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
       <td colspan="2">
       <center>
       <input type="submit" name="login" value="Login" class="button"/> &nbsp;&nbsp;&nbsp;
       <input type="reset" name="reset" value="Cancel" class="button"/>
       </center>
       </td>
      </tr>
      
      <tr>
       
      </tr>
   </table>
   
   </fieldset>
</form>
</center>
<br>


</div>

</body>
</html>
