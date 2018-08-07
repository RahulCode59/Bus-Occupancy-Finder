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
  $source=$_REQUEST["Source"];
  $destination=$_REQUEST["To"];
  $seat=$_REQUEST['seatno'];
  $conductor=$_SESSION["user"];
  $query="SELECT assignbusno FROM conductor where conductorno='$conductor';";
  $qry=mysqli_query($conn,$query);
  if(mysqli_num_rows($qry)>0){
    while($res=mysqli_fetch_array($qry)){
		
		$busno=$res['assignbusno'];	
		}
		$c=0;
  $sql="select * from `$busno` where seatno=$seatno";
  $q=mysqli_query($conn,$sql);
  if(mysqli_num_rows($q)>0){
	  while($res1=mysqli_fetch_array($q)){
		  $seatno[$c]=$res1['seatno'];
		  $sourcecityid[$c]=$res1['bsource'];
		  $c++;
		  
  }}
   $sl="select cityid from cityno where city_name='$source'";
  $ql=mysqli_query($conn,$sl);
  if(mysqli_num_rows($ql)>0){
	  while($res1=mysqli_fetch_array($ql)){
		  $sourceid=$res1['cityid'];
	  }
  }	

  $s2="select cityid from cityno where city_name='$destination'";
  $q2=mysqli_query($conn,$s2);
  if(mysqli_num_rows($q2)>0){
	  while($res2=mysqli_fetch_array($q2)){
		  $destinationid=$res2['cityid'];
	  }
  }	
$sql4="select destinationno,routeno from busnew where busno=$busno";
  $q4=mysqli_query($conn,$sql4);
  if(mysqli_num_rows($q4)>0){
	  while($res4=mysqli_fetch_array($q4)){
		   $brno=$res4['routeno'];
		  
	  }
  }
  
  $sql5 = "SELECT * FROM sample where routeno=$brno;";
$q5 = mysqli_query($conn, $sql5);

if(mysqli_num_rows($q5)>0){
	while ($res = mysqli_fetch_array($query1)){
	$route=$res['routeno'];
	$source=$res['sourceno'];
	$stop1=$res['stop1no'];
	$stop2=$res['stop2no'];
	$destination=$res['destinationno'];
}}

  $flag_bus=0;
  if (($source==$sourceid) and ($stop1==$destinationid))
	{
		$flag_bus=1;
		
	}
	else if (($source==$sourceid) and ($stop2==$destinationid))
	{
	$flag_bus=1;
	}
    else if (($source==$sourceid) and ($destination==$destinationid))
	{
		$flag_bus=1;
	}
	else if (($stop1==$sourceid) and ($stop2==$destinationid))
	{
	$flag_bus=1;
	}
	else if (($stop1==$sourceid) and ($destination==$destinationid))
	{
	$flag_bus=1;
	}
	else if (($stop2[$y]==$sourceid) and ($destination==$destinationid))
	{
	$flag_bus=1;
	}
	
if ($flag_bus==1)
{	
 for($i=0;$i<$c;$i++){
	  
	  if($destinationid<=$sourcecityid[$i] )
	  {  
		  $sql1="update `$busno` set bsource='$sourceid' and 
		         bdestination='$destinationid' where seatno='$seat';";
			$q1=mysqli_query($conn,$sql1);
            if(!$q1){
				die("error not possible");
            }
          echo '<script type="text/javascript">

          alert("SEAT BOOKED!!!"); 
          window.location.href="http://localhost/appda2/conductor_alter.php";
        </script>'; 			
	  }
	  
  }
 
  
  }
else
{
	 echo '<script type="text/javascript">

          alert("INVALID SOURCE OR DESTINATION SELECTED!!!"); 
          window.location.href="http://localhost/appda2/conductor_alter.php";
        </script>';
	
}	
  
  
  
  
  
  }
  else
  {
	    echo '<script type="text/javascript">
          alert("INVALID CREDENTIALS!!!"); 
          window.location.href="http://localhost/appda2/conductor_alter.php";
        </script>'; 
       

  }
  

?>