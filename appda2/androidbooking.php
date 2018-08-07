<?php
if( isset($_GET['busno'])){
 $db_host = 'localhost'; // Server Name
 $db_user = 'root'; // Username
 $db_pass = ''; // Password
 $db_name = 'busoccupancy2'; // Database Name

 $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

 if (!$conn) {
 	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
 }
 $busno=$_GET['busno'];
 $source=$_GET['scid'];
 $destination=$_GET['destid'];
 $seat=$_GET['seat'];
 $seatarray=explode(",",$seat);
 $sql = "SELECT * FROM cityno where city_name='$source' ;";
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($query)>0){
	while ($row = mysqli_fetch_array($query)){
	$city[0]=$row['cityid'];
	$distance[0]=$row['citykm'];

	
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
	$distance[1]=$row['citykm'];
}
}
$l=2;

if($city[0] > $city[1])
{
$sql = "SELECT * FROM cityno1 where city_name='$source' ;";
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($query)>0){
	while ($row = mysqli_fetch_array($query)){
	$city[0]=$row['cityid'];
	$distance[0]=$row['citykm'];

	
}
}
$sql = "SELECT * FROM cityno1 where city_name='$destination';";
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($query)>0){
	while ($row = mysqli_fetch_array($query)){
	$city[1]=$row['cityid'];
	$distance[1]=$row['citykm'];

	
}
}
	$l=1;
	
}	
$j=0;
$myarray=array("");
 for($i=0;$i<count($seatarray);$i++){
	  $s6="select type from seats where seatno='$seatarray[$i]'";
	       $q6=mysqli_query($conn,$s6);
	     if(mysqli_num_rows($q6)>0){
		 while($res3=mysqli_fetch_array($q6))
		{
            $type=$res3['type'];	
    	}
	  }
 $s1a="insert into `$busno` (seatno,type,bsource,bdestination) values ($seatarray[$i],'$type',$city[0],$city[1]);";
 $q1a=mysqli_query($conn,$s1a);
 $sq="select max(bookingid) as book from `$busno`";
 $q=mysqli_query($conn,$sq);
 while($res=mysqli_fetch_array($q))
 { $book=$res['book'];}
     $a = new stdClass();
	 $a->bookingid = $book;
      $a->seatno=$seatarray[$i] ;
	  $a->type=$type;
	  $a->source=$source;
	  $a->destination=$destination;
	  $myarray[$j++]=$a;
 if($q1a)
 {
	 $myJSON = json_encode($myarray);
     echo $myJSON;
 }	  
}

}
?>