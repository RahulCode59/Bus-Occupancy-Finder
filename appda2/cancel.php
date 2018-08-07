<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'busoccupancy2'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$busno=$_REQUEST['Busno'];
$bookid=$_REQUEST['BookingId'];
$s1="delete from `$busno` where bookingid=$bookid;";
$q1=mysqli_query($conn,$s1);
if(!$q1){
	echo '<script type="text/javascript">
		  alert("No Such Id Exists!!!"); 
         window.location.href="http://localhost/appda2/ticket cancel.php";
        </script>';
}
else{
	echo '<script type="text/javascript">
		  alert("Booking Cleared & Cancellation Charge: Rs 100/-"); 
         window.location.href="http://localhost/appda2/ticket cancel.php";
        </script>';
}
}
?>