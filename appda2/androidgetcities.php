<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'busoccupancy2'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$sql="select * from cityno";
$q=mysqli_query($conn,$sql);
if(mysqli_num_rows($q)>0){
	$i=0;
	while($res=mysqli_fetch_array($q)){
		$a = new stdClass();
		$a->cityName = $res['city_name'];
        $a->cityId=$res['cityid'] ;

        $myarray[$i++]=$a;
       
	}
	 $myJSON = json_encode($myarray);

      echo $myJSON;
}

?>