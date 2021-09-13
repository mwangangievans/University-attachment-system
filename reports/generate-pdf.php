<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',10);
	
	$this->Cell(0,6,"LIST OF STUDENTS ON ATTACHMENT",0,1,'C');
	$this->Cell(0,6," T.U.M",0,1,'C');  
	echo "<img src='../images/user-info-icon.png'";
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
$link = mysqli_connect("localhost", "root", "", "industrial_attachment_db") or die($link);

mysqli_connect('localhost','root','');
mysqli_select_db($link ,'industrial_attachment_db');

$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
//$pdf->Table('SELECT `fname`, `lname`,`phone`, `adress`, `email` from contact order by `phone`');
//$pdf->AddPage();
//Second table: specify 3 columns

$pdf->AddCol('fname',30,'','C');
$pdf->AddCol('lname',30,'','C');
$pdf->AddCol('regno',30,'','C');
$pdf->AddCol('phone',20,'','C');
$pdf->AddCol('firm_name',30,'','C');
$pdf->AddCol('location',20,'','C');
$pdf->AddCol('county',20,'','C');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>1);
$pdf->Table('select fname,  lname, regno, phone, firm_name, location, county  from main',$prop);

//$pdf->Output("C:\Users\John\Desktop/somename.pdf",'F'); 


$pdf->Output($downloadfilename.".pdf"); 

header('Location:'.$downloadfilename.".pdf");

?>
