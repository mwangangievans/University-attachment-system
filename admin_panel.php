<?php include'sess_admin.php'; ?>
<?php include('dbconnection.php'); ?>

<!DOCTYPE html>
<head>

<title>ADMIN PANEL</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php include'header_local_admin.php'; ?>
</head>

<body onLoad=startTime()>

<div id="admin_wrapper">



  
  
  <?php 
  $link = mysqli_connect("localhost", "root", "", "industrial_attachment_db") or die($link);
  $qry = mysqli_query( $link ,"select * from main");
  $rw = mysqli_num_rows($qry);
  
   ?>
   
   
  
  <table  width="1300px">
  <tr style="color:#FFF; font-weight:bold; font-family:'Times New Roman', Times, serif;">
    <td  align="left">MASTER LIST</td>
     <td  align="right"><b style="background:#009; padding:2px 20px 2px 20px; border-radius:2px;"><?php
	 
	 
	  echo $rw ?> Entries </b></td>
  </tr>
  </table>
  
  <hr color="#FFFFFF">
  <div class="admin_table">
  
  
   <table  width="1280px">
     <tr>
   <th  width="13%">department</th>
   <th  width="8%">first name</th>
   <th  width="8%">middle name</th>
   <th  width="8%">last name</th>
   <th  width="8%">Reg no</th>
   <th  width="8%">Phone no</th>
   <th  width="11%">Email</th>
   <th  width="6%">period</th>
   <th  width="8%">firm </th>
   <th  width="6%">address</th>
   <th  width="8%">county</th>
   <th  width="8%">location</th>
     </tr>
     
   
   
   </table>
  </div>
  
  
  
   
   <div class="table_scroll">
   <table  width="1280px" border="1px" style="border:#FFF; border-collapse:collapse; border-width:thin; background:#CCC; ">
   <?php
     $link = mysqli_connect("localhost", "root", "", "industrial_attachment_db") or die($link);
 $query_view = "select * from main";
 $result_view =mysqli_query(  $link , $query_view) or die (mysqli_error($link));
 

 
 while($rows = mysqli_fetch_array($result_view) and $rows['period']!==""){
	 ?>
     
     <tr>
     <td width="13%"><?php echo $rows['dept']; ?></td>
     <td width="8%"><?php echo $rows['fname']; ?></td>
     <td  width="8%"><?php echo $rows['mname']; ?></td>
     <td  width="8%"><?php echo $rows['lname']; ?></td>
     <td  width="8%"><?php echo $rows['regno']; ?></td>
     <td  width="8%"><?php echo $rows['phone']; ?></td>
     <td  width="11%"><?php echo $rows['email']; ?></td>
     <td  width="6%"><?php echo $rows['period']; ?></td>
     <td  width="8%"><?php echo $rows['firm_name']; ?></td>
     <td  width="6%"><?php echo $rows['firm_address']; ?></td>
     <td  width="8%"><?php echo $rows['county']; ?></td>
     <td  width="8%"><?php echo $rows['location']; ?></td>
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
<a href="reports/generate-pdf.php" target="_blank" rel="download" class="buttonlink">View Report</a>
</td>
</tr>
</table>


</div>

</body>
</html>
