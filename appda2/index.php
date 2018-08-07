<?php
session_start();
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'busoccupancy2'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$fbno=$_SESSION['fbno'];
$fus=$_SESSION['fus'];
$fud=$_SESSION['fud'];
$fprice=$_SESSION['fprice'];
$ftime=$_SESSION['ftime'];
$fdate=$_SESSION['fdate'];
$uni=$_SESSION['abc'];
$s=explode(",",$_SESSION['s']);
$sb=explode(",",$_SESSION['sb']);

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
?>
<html>
<title>registration</title>
<head>
	<link rel="stylesheet" type="text/css" href="st1.css">
	<style>
	table,td,th{
	border: 3px solid black;
	border-collapse:collapse;
	padding-left:10px;
}
#ticket
{   padding-left:2px;
	margin-top:50px;
	margin-left:430px;
	/*margin-right:300px;*/
	border:2px solid black;
	background-color:#EECFA1;
	width:450px;
	height:auto;
	font-size:20px;
}
</style>
</head>
<body>
<h1><u>TICKET GENERATED</u></h1>
<h3><b>To download ticket click below:</b></h3>
<br>
<?php
echo "<a href=ticket.php?f_name=".$_POST['firstname']."&l_name=".$_POST['lastname']."&eemail=".$_POST['email']."&phoone=".$_POST['phone_no']."&busno=".$fbno.
"&source=".$fus."&dest=".$fud."&seat=".$_SESSION['s']."&sbook=".$_SESSION['sb']." target=_blank><h4><b>Download</b>
</h4></a>";
?>
<div id="ticket">
	<b>Source:</b>
	<?php
	echo $fcity[0];
	?>
	<br>
	<b>Destination:</b>
	<?php
	echo $fcity[1];
	?>
	<br>
	<b>Bus no:</b>
	<?php
	echo $fbno;
	?>
	
	<br>
	<b>Firstname:</b>
	<?php
	echo $_POST['firstname'];
	?>
	<br>
	<b>Lastname:</b>
	<?php
	echo $_POST['lastname'];
	?>
	<br>
	<b>Email:</b>
	<?php
	echo $_POST['email'];
	?>
	<br>
	<b>Phone no:</b>
	<?php
	echo $_POST['phone_no'];
	?>
	<table class="data-table">
			<tr>
				<th>Selected Seats</th>
				<th>Booking Id</th>
			</tr>
		
		<?php
	for($a=0;$a<count($sb);$a++){
	echo'<tr><td>'.$s[$a] .'</td>
	<td>' .$sb[$a].'</td></tr>'; }
	?>
	<!--<p id="SEAT_INFO">Selected Seats    Booking Id:- 
	<?php
	for($a=0;$a<count($sb);$a++){
	echo $s[$a] ."        " .$sb[$a]."<br>"; }
	?></p> -->
	</table>
	</div>
</body>
</html>