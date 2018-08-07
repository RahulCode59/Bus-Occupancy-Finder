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
$user=$_SESSION['user'];
$query="SELECT assignbusno FROM conductor where conductorno='$user';";
$qry=mysqli_query($conn,$query);
  if(mysqli_num_rows($qry)>0){
    while($res=mysqli_fetch_array($qry)){
		
		$busno=$res['assignbusno'];
		
	}
}
$s1="delete from `$busno` ;";
$q1=mysqli_query($conn,$s1);
 if(!$q1){
	 die("clearing error");
 }
 else{
	      echo '<script type="text/javascript">
		  alert("ALL BOOKINGS CLEARED!!!"); 
         window.location.href="http://localhost/appda2/conductor_alter.php";
        </script>';
 }
?>