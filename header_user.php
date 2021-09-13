<?php include'dbconnection.php'; 

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
  <li>
 <img src="images/user-info-icon.png" align="left" width="30" height="30"/>&nbsp;&nbsp;logged in as &nbsp;&nbsp;<strong style="color:#0420A2; font-size:24px;">
<?php echo $login_session; ?></strong>
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
  
  <li>&nbsp;</li>
  
  <li style="float:right;  " id="reset_button" >
  <a href="reset_password.php" style="text-decoration:none;" ><img src="images/settings.png" align="absmiddle";/>&nbsp;&nbsp;Reset Password?</a>
  </li>
</ul>
</div>

<div id="logout">
<a href="logout.php"><img src="images/menu-logoff.png"/>Logout</a>
</div>

</div>
