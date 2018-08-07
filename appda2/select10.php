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
$source=$_REQUEST['Source'];
$_SESSION['uss']=$source;
$destination=$_REQUEST['To'];
$_SESSION['usd']=$destination;
$xv=$_REQUEST['ll'];
$cdate=$_REQUEST['date'];
if($xv==2){
	$rdate=$_REQUEST['date1'];
}

$i=-1;
	  
	  if(!empty($_POST['select'])){
	  foreach($_POST['select'] as $check){
		  if ($check!=0)
		  {
			  $checkbox[++$i]=$check;
		  }
		  
   }
  }
  else
  {
	  $checkbox=array(1,2,3);
	  
  }


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
if($city[0]==$city[1]){
	die("<html><body><h1>Value Error:select different source and destination city</h1></body></form>");
	//header("location:  http://localhost/appda1/notfound.php");
}
else{
	$_SESSION["sourcecode"]=$city[0];
	$_SESSION["destcode"]=$city[1];
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
 $k=count($checkbox);
  $b=0;
  for($y=0;$y<$a;$y++)
  {
	  if($k==1){
	  $sql2[$y]="select * from busnew where routeno='$x[$y]' and bustype=$checkbox[0];";
	  }
	  else{
		  $sql2[$y]="select * from busnew where routeno='$x[$y]';";
	  }
	$query2[$y]=mysqli_query($conn,$sql2[$y]);
  }
}
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>STRAIGHT WAY BUSES AVAILABLE</h1>
	<table class="data-table">

		<thead>
			<tr>
				<th>BUS NO</th>
				<th>BUS SOURCE CITY</th>
				<th>BUS DESTINATION CITY</th>
				<th>BOARDING CITY</th>
				<th>DESTINATION CITY</th>
				<th>DATE</th>
				<th>ESTIMATED ARRIVAL</th>
				<th>SEATS AVAILABLE</th>
				<th>BOOK NOW</th>
			</tr>
		</thead>
		<tbody>
		<?php
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
			$source=strtoupper($_REQUEST['Source']);
            $destination=strtoupper($_REQUEST['To']);
		    list($hour,$minute,$second) = explode(':', $row['start_time']);
			$hrs+=$hour;
			$min+=$minute;
			$sec+=$second;
			$time=(($hrs)%24).":".$min.":".$sec;
			//$input=strtotime($ctime);
            //$next=strtotime($time);
            //$comp=($next-$input)/60;
			
			$date=$row['date'];
			if($hrs>=24){
			$date = strtotime("+1 day", strtotime($row['date']));
		    $date=date("Y-m-d", $date);
		}
			if($date==$cdate)
			{
			echo '<tr>
					<td>'.$row['busno'].'</td>
					<td>'.$row['sourcecity'].'</td>
					<td>'.$row['destinationcity'].'</td>
					<td>'.$source.'</td>
					<td>'.$destination.'</td>
					<td>'.$date.'</td>
					<td>'.$time.'</td>
					<td>'.$cseat.'</td> 
					<td><a href=ns.php?f_name='.$row['busno'].'&us_city='.$city[0].'&ud_city='.$city[1].'&index='.$l.'>SELECT SEATS</a></td>
				</tr>';
			}
	
		}
		}?>
		</tbody>
		
	</table>
</body>
</html>
<?php
if($xv==2){
    $source=$_SESSION['usd'];
    $destination= $_SESSION['uss'];
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
if($city[0]>$city[1])
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
if($city[0]==$city[1]){
	die("<html><body><h1>Value Error:select different source and destination city</h1></body></form>");
	//header("location:  http://localhost/appda1/notfound.php");
}
else{
	$x=array("");
	$_SESSION["sourcecode"]=$city[0];
	
	$_SESSION["destcode"]=$city[1];
	
 for ($y=0;$y<$j;$y++)
 {
	 //echo "<br>source:".$source[$y]."destination:".$destination[$y]."stop1:".$stop1[$y]."stop2:".$stop2[$y]."city[0]:".$city[0]."city[1]:".$city[1];
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
 $k=count($checkbox);
  $b=0;
  for($y=0;$y<$a;$y++)
  {  
	  if($k==1){
	  $sql2[$y]="select * from busnew where routeno=$x[$y] and bustype=$checkbox[0];";
	  }
	  else{
		  $sql2[$y]="select * from busnew where routeno=$x[$y];";
	  }
	$query2[$y]=mysqli_query($conn,$sql2[$y]);
	
  }
}
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>RETURN BUSES AVAILABLE</h1>
	<table class="data-table">

		<thead>
			<tr>
				<th>BUS NO</th>
				<th>BUS SOURCE CITY</th>
				<th>BUS DESTINATION CITY</th>
				<th>BOARDING CITY</th>
				<th>DESTINATION CITY</th>
				<th>DATE</th>
				<th>ESTIMATED ARRIVAL</th>
				<th>SEATS AVAILABLE</th>
				<th>BOOK NOW</th>
			</tr>
		</thead>
		<tbody>
		<?php
		
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
			$source=strtoupper($_REQUEST['Source']);
            $destination=strtoupper($_REQUEST['To']);
		    list($hour,$minute,$second) = explode(':', $row['start_time']);
			$hrs+=$hour;
			$min+=$minute;
			$sec+=$second;
			$time=(($hrs)%24).":".$min.":".$sec;
			//$input=strtotime($ctime);
            //$next=strtotime($time);
            //$comp=($next-$input)/60;
			
			$date=$row['date'];
			if($hrs>=24){
			$date = strtotime("+1 day", strtotime($row['date']));
		    $date=date("Y-m-d", $date);
		}
			if($date==$rdate)
			{
			echo '<tr>
					<td>'.$row['busno'].'</td>
					<td>'.$row['sourcecity'].'</td>
					<td>'.$row['destinationcity'].'</td>
					<td>'.$source.'</td>
					<td>'.$destination.'</td>
					<td>'.$date.'</td>
					<td>'.$time.'</td>
					<td>'.$cseat.'</td> 
					<td><a href=ns.php?f_name='.$row['busno'].'&us_city='.$city[0].'&ud_city='.$city[1].'&index='.$l.'>SELECT SEATS</a></td>
				</tr>';
			}
		}
		}
}
}
		?>
		</tbody>
		
	</table>
</body>
</html>



