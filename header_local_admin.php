<?php include'dbconnection.php'; ?>

<?php
$link = mysqli_connect("localhost", "root", "", "industrial_attachment_db") or die($link);
 $query_view = "select * from user_details";
 $result_view =mysqli_query($link , $query_view) or die (mysqli_error($link));
 $rows = mysqli_fetch_array($result_view);
 ?>
  <head>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script>
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();

m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>

</head>




<div id="header">
   <div id="leftside">
    <ul>
  <li>
<!-- logged in as -->
<strong style="color:#00F; font-size:24px;">
<?php //echo $login_session; ?></strong>
  </li>
 
  <li>
 <SCRIPT LANGUAGE="Javascript">
// Array of day names
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
				"Thursday","Friday","Saturday");
// Array of month Names
var monthNames = new Array(
"January","February","March","April","May","June","July",
"August","September","October","November","December");

var now = new Date();
document.write(dayNames[now.getDay()] + ", " + 
monthNames[now.getMonth()] + " " + 
now.getDate() + ", " + now.getFullYear());

</SCRIPT>
  </li>
  
   <li id="txt">
  &nbsp;
  </li>
  <li>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  </li>
  
  <li>
   <a href="add_users.php?action=add&id=<?php echo $rows["id"]; ?>" class="button_home"> ADD STUDENT</a>
  
  </li>
  
  <li>
   <a href="admin_panel.php" class="button_home"> ADMIN PANEL</a>
  
  </li>
  
  <li>
   <a href="search_and_display.php" class="button_home"> SEARCH / SORT</a>
  
  </li>
  
</ul>
</div>

<div id="logout">
<a href="logout.php"><img src="images/menu-logoff.png"/>Logout</a>
</div>

</div>
