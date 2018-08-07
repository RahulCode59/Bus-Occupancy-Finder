<?php
session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST"){
 $dbname="busoccupancy2";
 $servername="localhost";
 $username="root";
 $password="";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
 if(!$conn){
   die("connection failed:".mysqli_connect_error());
  }
 $busno=$_REQUEST['busno'];
 $cond=$_REQUEST['cid'];
 $source=$_REQUEST['sour'];
 $destination=$_REQUEST['dest'];
 $type=$_REQUEST['bus_type'];
 $routeno=$_REQUEST['route'];
 $date=$_REQUEST['date'];
 $time=$_REQUEST['time'];
 $flag=2;
$sql = "SELECT * FROM cityno where city_name='$source' ;";
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($query)>0){
	while ($row = mysqli_fetch_array($query)){
	$city[0]=$row['cityid'];
}
}
$sql = "SELECT * FROM cityno where city_name='$destination';";
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($query)>0){
	while ($row = mysqli_fetch_array($query)){
	$city[1]=$row['cityid'];
}
}
echo $city[0];
echo $city[1];
/* $sql="select busno from busnew where busno=$busno";
 $q=mysqli_query($conn,$sql);
 if(mysqli_num_rows($q)>0){
	 $flag=1;
 }
 if($flag==1){
	 $sql1="update busnew set ";
 }*/
 }
?>