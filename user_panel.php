
<?php include'session.php'; ?>
<?php include('dbconnection.php'); 
 //include('add_user_details.php'); 

?>

<?php
$username = $_SESSION['login_user'];
$query_view = "select * from main where regno ='$username'";
 $result_view =mysql_query($query_view) or die (mysql_error());
 $rows = mysql_fetch_array($result_view);



$action= $_GET['action'];
$id=$_GET["id"];

if($action=="add")
{
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
    
    $phone ="";
	$email ="";
	$period ="";
	$firm_name ="";
	$firm_address ="";
	$county ="";
	$location ="";
	
	
}


else if($action=="edit")
{
$query="SELECT  * FROM main WHERE id='$id'";
$run=mysql_query($query) OR die("Unable to execute Queary");
  while($row=mysql_fetch_array($run))
	{
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
	
	$phone =$row['phone'];
	$email =$row['email'];
	$period =$row['period'];
	$firm_name =$row['firm_name'];
	$firm_address =$row['firm_address'];
	$county =$row['county'];;
	$location =$row['location'];
	
	
	}	
	
}

else if($action=="delete")
{
	
mysql_query("DELETE FROM main WHERE id='$id'") or die(mysql_error());
    header("location:user_panel.php?msg=Details deleted successfully&action=add&id=0");
   $dept =$row['dept'];
	
	$fname = $row['fname'];
	
	$mname = $row['mname'];
	
	$lname = $row['lname'];
	
	$regno = $row['regno'];
	
    $phone ="";
	$email ="";
	$period ="";
	$firm_name ="";
	$firm_address ="";
	$county ="";
	$location ="";
}


if(isset($_POST['Save']))

{
	
	
	
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
	
		
		if($action=="add")
		{
			mysql_query("insert into main (dept, fname, mname, lname, regno, phone, email, period, firm_name, firm_address, county, location) values ('$dept', '$fname', '$mname', '$lname', '$regno', '$phone', '$email', '$period', '$firm_name', '$firm_address', '$county', '$location')") or die(mysql_error());
     header("location:user_panel.php?msg=Details added successfully&action=add&id=0");
			//header('Location:dashboard.php?msg=- Record Added -');
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
	$phone ="";
	$email ="";
	$period ="";
	$firm_name ="";
	$firm_address ="";
	$county ="";
	$location ="";
		
		}
		
		elseif($action="edit")
		{
			mysql_query("UPDATE main SET phone='$phone', email='$email', period='$period', firm_name='$firm_name', firm_address='$firm_address', county='$county', location='$location' WHERE id='$id'" ) or die(mysql_error());
			//header('Location:dashboard.php?msg=- Record Saved -');
			header("location:user_panel.php?msg=Record Updated successfully&action=add&id=0");
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
	//$regno = $_POST['regno']	
		$phone ="";
	$email ="";
	$period ="";
	$firm_name ="";
	$firm_address ="";
	$county ="";
	$location ="";
			
		}
	}





?>




<!DOCTYPE html>
<head>
<title>DASHBOARD</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="images/Home-icon.png" rel="shortcut icon"/>
<?php include('header_user.php'); ?>

<script language="javascript">

function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}</script>

</head>

<body onLoad="startTime()">

<div id="user_wrapper">

<div id="user_content">
   <form action="" method="post" >
   <fieldset style="height:319px;  background:#5F56C5;" >
   
   <table width="900px" align="center">
    <tr>
      <td>Department</td>
      <td>
       <p class="textbox">
       <?php echo $dept;  ?> 
   </p>
      
      </td>
      
      <td rowspan="8" width="30px">&nbsp;</td>
      
      <td>Attachment period</td>
      <td>
      <select name="period" class="combo">
      <option selected><?php echo $period;  ?> </option>
      <option value="Jan - April">Jan - April</option>
      <option value="May - Aug">May - Aug</option>
      <option value="Sep - Dec">Sep - Dec</option>
      </select>
      </td>
    </tr>
    
    <tr>
      <td>First Name</td>
      <td>
  <p class="textbox">
    <?php echo $fname;  ?>
   </p>
      </td>
      <td>firm name</td>
      <td>
      <input type="text" name="firm_name" placeholder="enter the firm name" class="textbox" value=" <?php echo $firm_name;  ?> " required/>
      </td>
    </tr>
    
    <tr>
      <td>Middle Name</td>
      <td>
       <p class="textbox">
     <?php echo $mname;  ?> 
   </p>
      </td>
      <td>Firm Address</td>
      <td>
      <input type="text" name="firm_address" placeholder="enter the firm  address" class="textbox" value="<?php echo $firm_address;?>" required/>
      </td>
    </tr>
    
    <tr>
      <td>Last Name</td>
      <td>
       <p class="textbox">
     <?php echo $lname;  ?> 
   </p>
      </td>
      <td>County</td>
      <td>
      <select name="county" class="combo" required>
      <option  selected><?php echo $county;?></option>
      
      <option value="Nairobi">Nairobi</option>
      
      <option value="Garissa">Garissa</option>
      <option value="Wajir">Wajir</option>
      <option value="Mandera">Mandera</option>
      
      <option value="Marsabit">Marsabit</option>
      <option value="Isiolo">Isiolo</option>
      <option value="Meru">Meru</option>
      <option value="Tharaka Nithi">Tharaka Nithi</option>
      <option value="Embu">Embu</option>
      <option value="Kithui">Kithui</option>
      <option value="Makueni">Makueni</option>
      <option value="Machakos">Machakos</option>
      
      <option value="Nyandarua">Nyandarua</option>
      <option value="Nyeri">Nyeri</option>
      <option value="Kirinyaga">Kirinyaga</option>
      <option value="Muranga">Muranga</option>
      <option value="Kiambu">Kiambu</option>
      
      <option value="Mombasa">Mombasa</option>
      <option value="Kwale">Kwale</option>
      <option value="Kilifi">Kilifi</option>
      <option value="Lamu">Lamu</option>
      <option value="Tana River">Tana River</option>
      <option value="Taita Taveta">Taita Taveta</option>
      
      <option value="Turkana">Turkana</option>
      <option value="West Pokot">West Pokot</option>
      <option value="Samburu">Samburu</option>
      <option value="Trans Nzoia">Trans Nzoia</option>
      <option value="Uasin Gishu">Uasin Gishu</option>
      <option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
      <option value="Nandi">Nandi</option>
      <option value="Baringo">Baringo</option>
      <option value="Laikipia">Laikipia</option>
      <option value="Nakuru">Nakuru</option>
      <option value="Bomet">Bomet</option>
      <option value="Narok">Narok</option>
      <option value="Kajiado">Kajiado</option>
      <option value="Kericho">Kericho</option>
      
      <option value="Kakamega">Kakamega</option>
      <option value="Vihiga">Vihiga</option>
      <option value="Bungoma">Bungoma</option>
      <option value="Busia">Busia</option>
      
      <option value="Siaya">Siaya</option>
      <option value="Kisumu">Kisumu</option>
      <option value="Homa Bay">Homa Bay</option>
      <option value="Migori">Migori</option>
      <option value="Kisii">Kisii</option>
      <option value="Nyamira">Nyamira</option>
      </select>
      </td>
    </tr>
    
    <tr>
      <td>Reg Number</td>
      <td>
       <p class="textbox">
    <?php echo $regno;  ?> 
   </p>
      </td>
      <td>Location</td>
      <td>
      <input type="text" name="location" placeholder="enter the firm  location" class="textbox" value="<?php echo $location;?>" required/>
      </td>
    </tr>
    
    <tr>
      <td>Phone Number</td>
      <td>	  
	  <input type="text" placeholder="enter your phone number" maxlength="10" name="phone" class="textbox" required pattern="^\d{10}$"   oninvalid="this.setCustomValidity('Enter a valid phone number')"   oninput="setCustomValidity('')" value="<?php echo $phone;?>" /> 
      </td>
      <td  colspan="2" align="center">
      <a href="user_panel.php?action=add&id=<?php echo $rows["id"]; ?>" class="buttonlink_small">Add New</a>
      &nbsp; &nbsp; &nbsp;
      <input type="submit" name="Save" class="button" value="Save" onclick='Javascript:checkEmail();'/ >    
       &nbsp; &nbsp; &nbsp;   
       <input type="reset" value="Clear" name="clear" class="button"/>
      
      </td>
	  
     
    </tr>
    
    <tr>
      <td>Email</td>
      <td>
      <input type="text" id='txtEmail' name="email" placeholder="enter your email address" class="textbox" value="<?php echo $email;?>" required />
      </td>
      
	  <td colspan="2">
	    <span style="color:#FF0066; font-size:17px; font-weight:bold; text-align:center ">
	     <?php if (isset($_GET['msg'])){ ?>
			<?php echo $_GET['msg'];  ?>
	     <?php } ?> 
        </span>
	  </td>
    </tr>
   
   </table>
   </fieldset>
   </form>
</div>








<div style="float:left; width:1300px;">
<hr>
</div>

<div id="table_view">

<div id="user_table_th">
<table width="1280">
  <tr>
  
   <th width="10%">department</th>
   <th width="8%">first name</th>
   <th width="8%">middle name</th>
   <th width="6%">last name</th>
   <th width="8%">Reg no</th>
   <th width="8%">Phone no</th>
   <th width="10%">Email</th>
   <th width="8%"> period</th>
   <th width="7%">firm</th>
   <th width="7%">address</th>
   <th width="5%">county</th>
   <th width="5%">location</th>
   <th width="10%">Action</th>
  </tr>
  </table>
  </div>
  
  <div id="table_details">
  <form method="get">
   <table width="1280px;" border="1px" style="border:#FFF; border-collapse:collapse; border-width:thin; background:#CCC; ">
 <?php
 $username = $_SESSION['login_user'];
 $query_view = "select * from main where regno ='$username'";
 $result_view =mysql_query($query_view) or die (mysql_error());
 while($rows = mysql_fetch_array($result_view)){
	 ?>
    
     <tr>
     
     <td width="12%"><?php echo $rows['dept']; ?></td>
     <td width="7%"><?php echo $rows['fname']; ?></td>
     <td width="9%"><?php echo $rows['mname']; ?></td>
     <td width="7%"><?php echo $rows['lname']; ?></td>
     <td width="7%"><?php echo $rows['regno']; ?></td>
     <td width="8%" ><?php echo $rows['phone']; ?></td>
     <td width="10%"><?php echo $rows['email']; ?></td>
     <td width="7%"><?php echo $rows['period']; ?></td>
     <td width="7%" ><?php echo $rows['firm_name']; ?></td>
     <td width="7%"><?php echo $rows['firm_address']; ?></td>
     <td width="7%"><?php echo $rows['county']; ?></td>
     <td width="7%"><?php echo $rows['location']; ?></td>
     <td width="5%">
        <table>
          <tr>
                <?php $id = $rows["id"] ?>
     <td align="left">
 <a href='user_panel.php?action=edit&id=<?php echo $rows["id"]; ?>' class="buttontbl">EDIT</a></td>
                    
                    
    <td width="55%" align="left">
<a onClick='return confirm("are you sure you want to delete");' href='user_panel.php?action=delete&id=<?php echo $rows["id"]; ?>' class="buttontbl">DELETE</a></td>
            </tr>
      </table>
     
     
     
     
     </td>
     
     
     </tr>
     
     
     <?php
	 }
 
 ?>

</table>
</div>
<hr>

</form>
</div>

</div>


</body>
</html>

<?php
include('dbconnection.php');
//include('session.php');
if(isset($_REQUEST['submit'])){
	
	
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
	
	$query = "insert into main (dept, fname, mname, lname, regno, phone, email, period, firm_name, firm_address, county, location) values ('$dept', '$fname', '$mname', '$lname', '$regno', '$phone', '$email', '$period', '$firm_name', '$firm_address', '$county', '$location')";
	
	mysql_query($query);
	header('location:user_panel.php'); 
	
}

		
?>






