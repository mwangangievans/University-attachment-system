
<?php  include'dbconnection.php';


 ?>
<!DOCTYPE html>
<head>

<title>sort by period</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php include'header_local_admin.php'; ?>
</head>

<body onLoad=startTime()>


<div id="sort_period_wrapper">
 
    <form method="post">
    <table width="1280px">
    <tr>
    <td align="left">
<select name="sort_value" class="textbox_search">	
<option value="kisumu">kisumu</option>
      <option value="nairobi">nairobi</option>
      <option value="bomet">bomet</option>
      <option value="uasin gishu">uasin gishu</option>
      <option value="narok">narok</option>
      <option value="moyale">moyale</option>
      <option value="kiambu">kiambu</option>
      <option value="kisii">kisii</option>
      <option value="makueni">makueni</option>
      <option value="machakos">machakos</option>
      <option value="embu">embu</option>
 </select>  
   &nbsp;&nbsp;&nbsp;
 <input type="submit" name="sort" value="view" class="button_home"/> 	
   </td>
   </tr>
   </table>
  </form>      
	
    
    <table  width="1280px" >
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
    
    
    
    <?php 
if(isset($_POST['sort'])){
$period=$_POST['sort_value'];
	$query_sort="select * from main where county LIKE '%".$period."%'";
$result = mysql_query($query_sort);	
$row_count = mysql_num_rows($result);
if($row_count>0){
	while($rows_view=mysql_fetch_assoc($result)){ ?>
		
        <table   width="1280px" border="1px" style="border:#FFF; border-collapse:collapse; border-width:thin; background:#CCC; ">
    <tr>
     <td width="13%"><?php echo $rows_view['dept']; ?></td>
     <td width="8%"><?php echo $rows_view['fname']; ?></td>
     <td  width="8%"><?php echo $rows_view['mname']; ?></td>
     <td  width="8%"><?php echo $rows_view['lname']; ?></td>
     <td  width="8%"><?php echo $rows_view['regno']; ?></td>
     <td  width="8%"><?php echo $rows_view['phone']; ?></td>
     <td  width="11%"><?php echo $rows_view['email']; ?></td>
     <td  width="6%"><?php echo $rows_view['period']; ?></td>
     <td  width="8%"><?php echo $rows_view['firm_name']; ?></td>
     <td  width="6%"><?php echo $rows_view['firm_address']; ?></td>
     <td  width="8%"><?php echo $rows_view['county']; ?></td>
     <td  width="8%"><?php echo $rows_view['location']; ?></td>
     </tr>  
    </table>
        
       
		
        
	<?php	} ?>
	
    <div>
	<?php echo $row_count; ?>
    </div>
    
	<?php }

	}
  

 ?>
   
 </div>  
    
</body>
</html>

