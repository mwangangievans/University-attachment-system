<!-- INCLUDE DB CONNECTION -->
<?php include('dbconnection.php'); ?>
<?php include'sess_admin.php'; ?>

<?php
//declares the action being performed
$action= $_GET['action'];
$id=$_GET["id"];

if($action=="add")
{
   $dept = "";
	$fname ="";
	$mname ="";
	$lname = "";
	$regno ="";
	$password ="";
}

else if($action=="edit")
{
  $link = mysqli_connect("localhost", "root", "", "industrial_attachment_db") or die($link);
$query="SELECT  * FROM user_details WHERE id='$id'";
$run=mysqli_query( $link ,$query) OR die("Unable to execute Queary");
  while($row=mysqli_fetch_array($run))
	{		
	$dept = $row['dept'];
	$fname = $row['fname'];
	$mname = $row['mname'];
	$lname = $row['lname'];
	$regno = $row['regno'];
	$password =$row['password'];
	}		
}
else if($action=="delete")
{	
  $link = mysqli_connect("localhost", "root", "", "industrial_attachment_db") or die($link);
mysqli_query($link ,"DELETE FROM user_details WHERE id='$id'") or die(mysql_error());

      header("location:add_users.php?msg=Student details deleted successfully&action=add&id=0");
	$dept = "";
	$fname ="";
	$mname ="";
	$lname = "";
	$regno ="";
	$password ="";
}

if(isset($_POST['Save']))
{
	$dept = $_POST['dept'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$regno = $_POST['regno'];
	$pass=$_POST['password'];
	$password =md5($pass);		
		
if($action=="add")
		{
      $link = mysqli_connect("localhost", "root", "", "industrial_attachment_db") or die($link);

			mysqli_query($link ,"insert into user_details (dept, fname, mname, lname, regno, password) values ('$dept', '$fname', '$mname', '$lname', '$regno', '$password')") or die(mysql_error());
     header("location:add_users.php?msg=New student added successfully&action=add&id=0");
	$dept = "";
	$fname ="";
	$mname ="";
	$lname = "";
	$regno ="";
	$password ="";
		}
		
		elseif($action="edit")
		{
			mysqli_query($link ,"UPDATE user_details SET dept='$dept', fname='$fname', mname='$mname', lname='$lname', regno='$regno', password='$password' WHERE id='$id'") or die(mysql_error());
    header("location:add_users.php?msg=Student details updated successfully&action=add&id=0");
	$dept = "";
	$fname ="";
	$mname ="";
	$lname = "";
	$regno ="";
	$password ="";
			
		}
	}
?>


<!DOCTYPE html>
<head>

<title>ADMIN PANEL</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php  include'header_local_admin.php'; ?>
</head>

<body onLoad=startTime()>

<div id="admin_wrapper">

<div id="add_user">
   <form action="" method="post">
<table width="900px" align="center">
   <tr>
      <td>First Name</td>
      <td>
      <input type="text" name="fname"  placeholder="enter your first name" class="textbox" value="<?php echo $fname;?>" required  pattern='[A-Za-z\\s]*' oninvalid="this.setCustomValidity('Enter a valid name - Characters only')"   oninput="setCustomValidity('')"/>
      </td>
      <td>Department</td>
      <td>
      <select name="dept" class="combo"   >
      <option selected><?php echo $dept;?></option>
      <option value="Computing and IT">Computing and IT</option>
      <option value="Business ">Business</option>
      <option value="Mechanical">Mechanical</option>
      <option value="Electrical">Electrical</option>
      <option value="Building & Civil">Building & Civil</option>
      <option value="Maths and Physics">Maths and Physics</option>
      <option value="Applied Science">Applied Science</option>
       
      </select>
      
      </td>
    </tr>
    
    <tr>
      <td>Middle Name</td>
      <td>
      <input type="text" name="mname" pattern='[A-Za-z\\s]*' placeholder="enter your middle name" class="textbox" value="<?php echo $mname;?>"  required/>
      </td>
      <td>Reg Number</td>
      <td>
      <input type="text" name="regno" placeholder="enter your reg number" class="textbox" value="<?php echo $regno;?>" required/>
      </td>
    </tr>
    
    <tr>
      <td>Last Name</td>
      <td>
      <input type="text" name="lname" pattern='[A-Za-z\\s]*' placeholder="enter your last name" class="textbox" value="<?php echo $lname;?>" required/>
      </td>
     <td>Password</td>
      <td>
      <input type="text" name="password" placeholder="enter your password" class="textbox" value="<?php echo $password;?>" required/>
      </td>
    </tr>
    <tr> 
      <td colspan="4">
       <hr>
      </td>
    </tr>
    
    <tr>
     <td align="center" colspan="2">
	    <span style="color:#FF0066; font-size:17px; font-weight:bold; ">
	     <?php if (isset($_GET['msg'])){ ?>
			<?php echo $_GET['msg'];  ?>
	     <?php } ?> 
        </span>
	 </td>
	 <td colspan="2">
      <input type="submit" value="Submit" name="Save" class="button"/>
          
	     &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="reset" value="Clear" name="clear" class="button"/>
      </td>
    
    </tr>       
   </table>
   
   </form>
   
   
</div>  
  
  
  <?php 
  $qry = mysqli_query($link ,"select * from user_details");
  $rw = mysqli_num_rows($qry);
   ?>
  
  <table  width="1300px">
  <tr style="color:#FFF; font-weight:bold; font-family:'Times New Roman', Times, serif;">
    <td  align="left">MASTER LIST</td>
     <td  align="right"><b style="background:#009; padding:2px 20px 2px 20px; border-radius:2px;"><?php echo $rw ?> Entries </b></td>
  </tr>
  </table>
  
  <hr color="#FFFFFF">
  <div id="admin_table">
  
  
   <table  width="1280px">
     <tr>
   <th  width="10%">Department</th>
   <th  width="7%">First name</th>
   <th  width="7%">Middle name</th>
   <th  width="8%">last name</th>
   <th  width="5%">Reg no</th>
   <th  width="8%">Action</th>
     </tr>
     
   
   
   </table>
  </div>
 <!-- scrolling panel begins here-->
   <div id="add_user_scroll">
   <table  width="1280px" border="1px" style="border:#FFF; border-collapse:collapse; border-width:thin; background:#CCC; ">
   <?php
 $query_view = "select * from user_details";
 $result_view =mysqli_query($link ,$query_view) or die (mysqli_error($link));
 while($rows = mysqli_fetch_array($result_view)){
	 ?>
     
     <tr>
     <td width="13%"><?php echo $rows['dept']; ?></td>
     <td width="7%"><?php echo $rows['fname']; ?></td>
     <td  width="7%"><?php echo $rows['mname']; ?></td>
     <td  width="7%"><?php echo $rows['lname']; ?></td>
     <td  width="4%"><?php echo $rows['regno']; ?></td>
     <td width="7%">
              <table align="center">
                  <tr>
                <?php $id = $rows["id"] ?>
                   <td width="50%" align="right">
 <a href='add_users.php?action=edit&id=<?php echo $rows["id"]; ?>' class="buttontbl">EDIT</a>       
                    </td>
                    <td>&nbsp;</td>
                    <td width="50%"  align="left">
<a onClick='return confirm("are you sure you want to delete");' href='add_users.php?action=delete&id=<?php echo $rows["id"]; ?>'    class="buttontbl">DELETE</a>
                    </td>
                  </tr>
              </table>
           </td> 
     
     
     
     
     </tr>
     
     
     <?php
	 }
 
 ?>  
   </table>
  
  </div>
<hr color="#FFFFFF">

<table width="1250px">
<tr>
<td align="center">

<a href="#" class="buttonlink">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Print&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
</td>

<td align="center">
<a href="#" class="buttonlink">View Report</a>
</td>
</tr>
</table>

</div>

</body>
</html>
