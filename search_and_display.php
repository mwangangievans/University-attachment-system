<?php include'sess_admin.php'; ?>
<?php  include'dbconnection.php'; 

?>
<!DOCTYPE htm>
<html>
<head>

<title>Search and Sort</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="course.js"></script>

<script type='text/javascript'>
function validateForm()
{
	if(document.forms["search_record"]["search"].value=="")
	{
		alert("Please enter the record to be searched");
		return false;
	}
	
}
</script>
<?php include'header_local_admin.php'; ?>
<script type="text/javascript">

function printPartOfPage(elementId)
{
 var printContent = document.getElementById(elementId);
 var windowUrl = 'about:blank';
 var uniqueName = new Date();
 var windowName = 'Print' + uniqueName.getTime();

 var printWindow = window.open(windowUrl, windowName, 'left=0,top=10,width=700,height=600');

 printWindow.document.write(printContent.innerHTML);
 printWindow.document.close();
 printWindow.focus();
 printWindow.print();
 printWindow.close();
}

</script>

</head>

<body onLoad=startTime()>
<div id="search_wrapper">
    

<div id="top_boxes">
<div id="left">
    <form method="post" id="search_record" action="" onSubmit="return validateForm();" >


 <input type="text"  name="search" class="textbox_search"  />
 
 <input type="submit" name="search_this" value="Search" class="button_home"/>
 
 </form>
    </div>
    
    <div id="right">
    <form method="post"  id="sort_form">
 
<select onChange="print_state('state',this.selectedIndex);" id="country" name ="country" class="combo"></select>
 

 <select name ="state" id ="state" class="combo"></select>
        <script language="javascript">
		     print_results("country");  
        </script>
 
<input type="submit" name="sort_this" value="Sort" class="button_home"/> 
   </form>


</form>
    </div>
</div>








<div id="table_scroll_search">

<div class="admin_table">
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
</div>
<?php


if (isset($_POST['search_this'])){
	
   $query_search="SELECT * FROM main where fname LIKE '%".$_POST['search']."%' 
  OR  lname LIKE '%".$_POST['search']."%' 
   OR  mname LIKE '%".$_POST['search']."%'  
    OR  regno LIKE '%".$_POST['search']."%' 
   OR  phone LIKE '%".$_POST['search']."%' 
   OR  email LIKE '%".$_POST['search']."%' 
   OR  period LIKE '%".$_POST['search']."%' 
   OR  firm_name LIKE '%".$_POST['search']."%' 
   OR  firm_address LIKE '%".$_POST['search']."%' 
   OR  county LIKE '%".$_POST['search']."%' 
   OR  location LIKE '%".$_POST['search']."%' 
   ";
   $link = mysqli_connect("localhost", "root", "", "industrial_attachment_db") or die($link);
$result = mysqli_query($link ,$query_search);
$row =mysqli_num_rows($result);

if($row!=0){
	while($rows = mysqli_fetch_assoc($result))
	{ ?>
    
	
 <table   width="1280px" border="1px" style="border:#FFF; border-collapse:collapse; border-width:thin; background:#CCC; ">
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
    </table> 		
            
	<?php }
	 
	
	}
	
	
	else
		  { ?>
				<tr><td colspan="5" bgcolor="#C9E8EF" >&nbsp;No record found.</td></tr>
            </div>  
			<?php
       }
}


   ?>
    
   
   <!--sort--> 
   <?php  
if(isset($_POST['sort_this'])){
	//$sort_creteria=$_POST['country'];
	//$sort_option=$_POST['state'];
	
	if($_POST['country']=='Department'){
		
	$query_sort="select * from main where dept LIKE '%".$_POST['state']."%' order by county";
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

<?php		
		
}}

///attachment period

else if($_POST['country']=='Period'){
		
	$query_sort_period="select * from main where period LIKE '%".$_POST['state']."%'";
$result_period = mysql_query($query_sort_period);	
$row_count_period = mysql_num_rows($result_period);
if($row_count_period>0){
	while($rows_view_period=mysql_fetch_assoc($result_period)){ ?>
		
        <table   width="1280px" border="1px" style="border:#FFF; border-collapse:collapse; border-width:thin; background:#CCC; ">
    <tr>
     <td width="13%"><?php echo $rows_view_period['dept']; ?></td>
     <td width="8%"><?php echo $rows_view_period['fname']; ?></td>
     <td  width="8%"><?php echo $rows_view_period['mname']; ?></td>
     <td  width="8%"><?php echo $rows_view_period['lname']; ?></td>
     <td  width="8%"><?php echo $rows_view_period['regno']; ?></td>
     <td  width="8%"><?php echo $rows_view_period['phone']; ?></td>
     <td  width="11%"><?php echo $rows_view_period['email']; ?></td>
     <td  width="6%"><?php echo $rows_view_period['period']; ?></td>
     <td  width="8%"><?php echo $rows_view_period['firm_name']; ?></td>
     <td  width="6%"><?php echo $rows_view_period['firm_address']; ?></td>
     <td  width="8%"><?php echo $rows_view_period['county']; ?></td>
     <td  width="8%"><?php echo $rows_view_period['location']; ?></td>
     </tr>  
    </table>
        
       
		
        
	<?php	} ?>

<?php		
		
}}


//county sort
else if($_POST['country']=='County'){
		
	$query_sort_County="select * from main where county LIKE '%".$_POST['state']."%'";
$result_County = mysql_query($query_sort_County);	
$row_count_County = mysql_num_rows($result_County);
if($row_count_County>0){
	while($rows_view_County=mysql_fetch_assoc($result_County)){ ?>
		
        <table   width="1280px" border="1px" style="border:#FFF; border-collapse:collapse; border-width:thin; background:#CCC; ">
    <tr>
     <td width="13%"><?php echo $rows_view_County['dept']; ?></td>
     <td width="8%"><?php echo $rows_view_County['fname']; ?></td>
     <td  width="8%"><?php echo $rows_view_County['mname']; ?></td>
     <td  width="8%"><?php echo $rows_view_County['lname']; ?></td>
     <td  width="8%"><?php echo $rows_view_County['regno']; ?></td>
     <td  width="8%"><?php echo $rows_view_County['phone']; ?></td>
     <td  width="11%"><?php echo $rows_view_County['email']; ?></td>
     <td  width="6%"><?php echo $rows_view_County['period']; ?></td>
     <td  width="8%"><?php echo $rows_view_County['firm_name']; ?></td>
     <td  width="6%"><?php echo $rows_view_County['firm_address']; ?></td>
     <td  width="8%"><?php echo $rows_view_County['county']; ?></td>
     <td  width="8%"><?php echo $rows_view_County['location']; ?></td>
     </tr>  
    </table>
        
       
		
        
	<?php	} ?>

<?php		
		
}}
 
 }
?>


    
  </div>
  <input type="button" value="PRINT" onClick="JavaScript:printPartOfPage('table_scroll_search');" >
   </body>
</html>



