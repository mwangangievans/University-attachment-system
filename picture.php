<?php include 'session.php'; ?>
<?php include 'dbconnection.php'; ?>
<!DOCTYPE html>
<html>

<body>
<div id="container">
	<div class="con2">
    <?php
		$o=0;
		
		if (is_numeric($_GET['o']))
		{
			$o=$_GET['o'];
		}
		else {
			$o=0;
			}
		
		$username = $_SESSION['login_user'];	
		$query=mysql_query("SELECT * FROM main where regno ='$username'  LIMIT $o, 1");
		$get_pic=mysql_fetch_assoc($query);
		
		//$query_view = "select * from main where regno ='$username'";
		
		
		
	?>
    <?php do { ?>
    <table align="center" width="300" border=".5" bordercolor="#0B615E">
		<tr> <td colspan="2" align="center"><?php echo '<img src="upload/' . $get_pic['letter'] . '" width="200" height="200"> '; ?></td></tr>
 
 <tr>
   <td><?php echo $get_pic['regno']; ?></td>
 </tr>
 
 
	<?php
	} while ($get_pic=mysql_fetch_assoc($query));
	?>
    
</td><tr>
   </table>
    </div>
 
</div>
</body>
</html>
