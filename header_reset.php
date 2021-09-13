<?php include'dbconnection.php';
$username = $_SESSION['login_user'];
$query_view = "select * from main where regno ='$username'";
 $result_view =mysql_query($query_view) or die (mysql_error());
 $rows = mysql_fetch_array($result_view);

 ?><head>
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
    <li class="button_home">
    <a href="user_panel.php?action=add&id=<?php echo $rows["id"]; ?>" style="text-decoration:none;" ><img src="images/Home-icon.png"align="absmiddle"; width="30" height="30"/>HOME</a>
    </li>
    
    <li>&nbsp;&nbsp;</li>
  <li>
 <img src="images/user-info-icon.png" align="absmiddle";  width="30" height="30"/>&nbsp;&nbsp;logged in as

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
  
   <li id="txt" >
  <center>&nbsp;</center>
  </li>
  <li>&nbsp;</li>
  
</ul>
</div>

<div id="logout">
<a href="logout.php"><img src="images/menu-logoff.png"/>Logout</a>
</div>

</div>
