<?php
session_start();
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'busoccupancy2'; // Database Name
$fus=$_GET['source'];
$fud=$_GET['dest'];
$uni=$_SESSION['abc'];
$fprice=$_SESSION['fprice'];
$ftime=$_SESSION['ftime'];
$fdate=$_SESSION['fdate'];
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$sql="select city_name from cityno where cityid=$fus;";
$q=mysqli_query($conn,$sql);

if(mysqli_num_rows($q)>0){
	while($res=mysqli_fetch_array($q)){
		$fcity[0]=$res['city_name'];

	}
}

$sql="select city_name from cityno where cityid=$fud;";
$q=mysqli_query($conn,$sql);
if(mysqli_num_rows($q)>0){
	while($res=mysqli_fetch_array($q)){
		$fcity[1]=$res['city_name'];
	}
}

if($uni==1)
{
	
	$sql="select city_name from cityno1 where cityid=$fus;";
$q=mysqli_query($conn,$sql);
if(mysqli_num_rows($q)>0){
	while($res=mysqli_fetch_array($q)){
		$fcity[0]=$res['city_name'];

	}
}

$sql="select city_name from cityno1 where cityid=$fud;";
$q=mysqli_query($conn,$sql);
if(mysqli_num_rows($q)>0){
	while($res=mysqli_fetch_array($q)){
		$fcity[1]=$res['city_name'];
	}
}
}
require('mc_table/mc_table.php');

$pdf = new FPDF();
$pdf = new PDF_MC_Table();

$pdf->AddPage();

$pdf->SetFont('arial','B','25');

if(isset($_GET['f_name']))
{
  
	$pdf->Cell('195','10',"BUS TICKET",'0','0','C');
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetMargins(40, 20);
	$pdf->SetFont('arial','','10');
	$pdf->Ln();
	
$pdf->SetLineWidth(.1);
   
	$pdf->SetWidths(array(40,90,90,50));
	$pdf->Row(array("Name",$_GET['f_name'].' '.$_GET['l_name']));
	$pdf->SetFont('arial','','10');
	$pdf->Row(array("Email",$_GET['eemail']));
	$pdf->SetFont('arial','','10');
	$pdf->Row(array("Phone no",$_GET['phoone']));
	$pdf->SetFont('arial','','10');
	$pdf->Row(array("Source",$fcity[0]));
	$pdf->SetFont('arial','','10');
	$pdf->Row(array("Destination",$fcity[1]));
	$pdf->SetFont('arial','','10');
	$pdf->Row(array("Bus No",$_GET['busno']));
	$pdf->SetFont('arial','','10');
	$pdf->Row(array("Seat no",$_GET['seat']));
	$pdf->SetFont('arial','','10');
	$pdf->Row(array("booking id",$_GET['sbook']));
	$pdf->SetFont('arial','','10');
	$pdf->SetFont('arial','','10');
	$pdf->Row(array("Price",$fprice));
	$pdf->SetFont('arial','','10');
	$pdf->Row(array("Departure Date",$fdate));
	$pdf->SetFont('arial','','10');
	$pdf->Row(array("Departure Time",$ftime));	
}

$pdf->Output('','Ticket.pdf');


?>