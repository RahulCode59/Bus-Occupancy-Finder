<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'busoccupancy2'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$sourcenm=$_GET['scid'];
$_SESSION['uss']=$sourcenm;
$destinationm=$_GET['desid'];
$_SESSION['usd']=$destinationm;

$cdate=$_GET['date'];
$type=$_GET['bustype'];


$sql = "SELECT * FROM cityno where city_name='$sourcenm' ;";
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
$sql = "SELECT * FROM cityno where city_name='$destinationm';";
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
$sql = "SELECT * FROM cityno1 where city_name='$sourcenm' ;";
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
$sql = "SELECT * FROM cityno1 where city_name='$destinationm';";
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
$_SESSION['l']=$l;
$j=0;
$a=0;
if($l==1)
{$sql1 = "SELECT * FROM sample where routeno > 200;";}
else
{$sql1 = "SELECT * FROM sample where routeno < 200;";}
$query1 = mysqli_query($conn, $sql1);
if(mysqli_num_rows($query1)>0){
	while ($res = mysqli_fetch_array($query1)){
	$route[$j]=$res['routeno'];
	$source[$j]=$res['sourceno'];
	$stop1[$j]=$res['stop1no'];
	$stop2[$j]=$res['stop2no'];
	$destination[$j]=$res['destinationno'];
	$j++;
	}
/*if($city[0]==$city[1]){
	die("<html><body><h1>Value Error:select different source and destination city</h1></body></form>");
	//header("location:  http://localhost/appda1/notfound.php");
}
else{
	$_SESSION["sourcecode"]=$city[0];
	$_SESSION["destcode"]=$city[1];*/
 for ($y=0;$y<$j;$y++)
 {
	// echo "<br>source:".$source[$y]."destination:".$destination[$y]."stop1:".$stop1[$y]."stop2:".$stop2[$y]."city[0]:".$city[0]."city[1]:".$city[1];
  	if (($source[$y]==$city[0]) and ($stop1[$y]==$city[1]))
	{
		$x[$a]=$route[$y];
		$a++;
		
	}
	else if (($source[$y]==$city[0]) and ($stop2[$y]==$city[1]))
	{
		$x[$a]=$route[$y];
		$a++;
	}
    else if (($source[$y]==$city[0]) and ($destination[$y]==$city[1]))
	{
		$x[$a]=$route[$y];
		$a++;
	}
	else if (($stop1[$y]==$city[0]) and ($stop2[$y]==$city[1]))
	{
		$x[$a]=$route[$y];
		$a++;
	}
	else if (($stop1[$y]==$city[0]) and ($destination[$y]==$city[1]))
	{
		$x[$a]=$route[$y];
		$a++;
	}
	else if (($stop2[$y]==$city[0]) and ($destination[$y]==$city[1]))
	{
		$x[$a]=$route[$y];
		$a++;
	}
 }
 //$k=count($checkbox);
  $b=0;
  for($y=0;$y<$a;$y++)
  {
	  if($type==3){
		  $sql2[$y]="select * from busnew where routeno='$x[$y]';";
	  }
	  else{
	  $sql2[$y]="select * from busnew where routeno='$x[$y]' and bustype='$type';";
	  }
	$query2[$y]=mysqli_query($conn,$sql2[$y]);
  }

}
$i=0;
		for($d=0;$d<$a;$d++){
			
		while ($row = mysqli_fetch_array($query2[$d]))
		{   
			$z=$row['sourceno'];
			$x=$row['busno'];
			$sql3="select sum(citykm) as dist from cityno where cityid >$z and cityid<=$city[0];";
		    $query3=mysqli_query($conn,$sql3);
		    if(mysqli_num_rows($query3)>0){
			while ($res = mysqli_fetch_array($query3)){
				$time=$res['dist']*1.5;
				$hrs=(int)($time/60);
				$min=(int)($time-($hrs*60));
				$sec=(int)(($time*60)-($hrs*60*60)-($min*60));	
			  }
		   }
		    $sql4="select count(distinct seatno) as cseat from `$x` where ($city[0]>=bsource and $city[1]<=bdestination) or ($city[0]<=bsource and $city[1]>=bdestination)or ($city[0]<=bsource and $city[1]<=bdestination);";
			$query4=mysqli_query($conn,$sql4);
			if(mysqli_num_rows($query4)>0){
			while ($res1 = mysqli_fetch_array($query4)){
				$cseat=41-$res1['cseat'];	
			  }
		   }
			//$source=strtoupper($_REQUEST['Source']);
            //$destination=strtoupper($_REQUEST['To']);
		    list($hour,$minute,$second) = explode(':', $row['start_time']);
			$hrs+=$hour;
			$min+=$minute;
			$sec+=$second;
			$time=(($hrs)%24).":".$min.":".$sec;
			/*$input=strtotime($ctime);
            $next=strtotime($time);
            $comp=($next-$input)/60;*/
			
			$date=$row['date'];
			if($hrs>=24){
			$date = strtotime("+1 day", strtotime($row['date']));
		    $date=date("Y-m-d", $date);
			}
			
			$an = new stdClass();
			if($date==$cdate) {
				$an->BNo=$row['busno'];
				$an->startpoint=$row['sourcecity'];
				$an->endpoint=$row['destinationcity'];
				$an->date=$date;
				$an->time=$time;
				$an->availableseat=$cseat;
				$myarray[$i++]=$an;
			
			}
	     	 
		}
	//	if($i!=0){
		$myJSON = json_encode($myarray);//}
		
	//	else{ echo 0;}
		}
echo $myJSON;
}
?>

