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
  $sql="select * from `$busno`where seatno=$seat";
  $q=mysqli_query($conn,$sql);
  if(mysqli_num_rows($q)>0){
	  while($res1=mysqli_fetch_array($q)){
		  $seatno[$c]=$res1['seatno'];
		  $sourcecityid[$c]=$res1['bsource'];
		  $destinationcityid[$c]=$res1['bdestination'];
		  $c++;
	  }
  }	
  $s1="select cityid from cityno where city_name='$source'";
  $q1=mysqli_query($conn,$s1);
  if(mysqli_num_rows($q1)>0){
	  while($res1=mysqli_fetch_array($q1)){
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
  if($sourceid > $destinationid)
  {
	  $s1="select cityid from cityno1 where city_name='$source'";
  $q1=mysqli_query($conn,$s1);
  if(mysqli_num_rows($q1)>0){
	  while($res1=mysqli_fetch_array($q1)){
		  $sourceid=$res1['cityid'];
	  }
  }	
  $s2="select cityid from cityno1 where city_name='$destination'";
  $q2=mysqli_query($conn,$s2);
  if(mysqli_num_rows($q2)>0){
	  while($res2=mysqli_fetch_array($q2)){
		  $destinationid=$res2['cityid'];
	  }
	  
	  
	  
  }}
  $s3="select destinationno,routeno from busnew where busno=$busno";
  $q3=mysqli_query($conn,$s3);
  if(mysqli_num_rows($q3)>0){
	  while($res3=mysqli_fetch_array($q3)){
		  $brno=$res3['routeno'];
		  $bdno=$res3['destinationno'];
	  }
  }
   $s4 = "SELECT * FROM sample where routeno=$brno;";
   $q4 = mysqli_query($conn, $s4);

   if(mysqli_num_rows($q4)>0){
	 while ($res = mysqli_fetch_array($q4)){
	 $route=$res['routeno'];
	 $source1=$res['sourceno'];
	 $stop1=$res['stop1no'];
	 $stop2=$res['stop2no'];
	 $destination1=$res['destinationno'];
    } 
	   }
 
    $flag_bus=0;
    if (($source1==$sourceid) and ($stop1==$destinationid))
	{
		$flag_bus=1;	
	}
	else if (($source1==$sourceid) and ($stop2==$destinationid))
	{
	    $flag_bus=1;
	}
    else if (($source1==$sourceid) and ($destination1==$destinationid))
	{
		$flag_bus=1;
	}
	else if (($stop1==$sourceid) and ($stop2==$destinationid))
	{
	    $flag_bus=1;
	}
	else if (($stop1==$sourceid) and ($destination1==$destinationid))
	{
	    $flag_bus=1;
	}
	else if (($stop2==$sourceid) and ($destination1==$destinationid))
	{
	    $flag_bus=1;
	}
	if($flag_bus==1){
        $flag=0;
		$f=0;
        for($i=0;$i<$c;$i++){
	    if($seatno[$i]==$seat)
	    {   
	   $f=1;
	    if(($destinationid<=$sourcecityid[$i]) or ($sourceid>=$destinationcityid[$i]))
	    {
		  $flag=1;
		  $s6="select type from seats where seatno=$seat";
	       $q6=mysqli_query($conn,$s6);
	     if(mysqli_num_rows($q6)>0){
		 while($res3=mysqli_fetch_array($q6))
		{
            $type=$res3['type'];
    	}
	  }
	   $s7="insert into `$busno` (seatno,type,bsource,bdestination) values($seat,'$type',$sourceid,$destinationid);";
	   $q7=mysqli_query($conn,$s7);
	  if(!$q7){
				die("error not possible");
            }
          echo '<script type="text/javascript">

          alert("SEAT BOOKED!!!"); 
         window.location.href="http://localhost/appda2/conductor_alter.php";
        </script>'; 
		break;
     }
		 /* $s5="update `$busno` set bsource=$sourceid and 
		         bdestination=$destinationid where seatno=$seat and bsource=$sourcecityid[$i];";
			$q5=mysqli_query($conn,$s5);
            if(!$q5){
				die("error not possible");
            }
          echo '<script type="text/javascript">

          alert("SEAT BOOKED!!!"); 
          window.location.href="http://localhost/appda1/conductor_alter.php";
        </script>'; 			
	    }*/
		}
     }
   if($flag==0 and $f==0) 
  { 
	$s6="select type from seats where seatno=$seat";
	$q6=mysqli_query($conn,$s6);
	if(mysqli_num_rows($q6)>0){
		while($res3=mysqli_fetch_array($q6))
		{
            $type=$res3['type'];
    	}
	}
    $s7="insert into `$busno` (seatno,type,bsource,bdestination)values($seat,'$type',$sourceid,$destinationid);";
	$q7=mysqli_query($conn,$s7);
	 if(!$q7){
				die("error not possible");
            }
          echo '<script type="text/javascript">

          alert("SEAT BOOKED!!!"); 
          window.location.href="http://localhost/appda2/conductor_alter.php";
        </script>'; 
  }
 else if($flag==0 and $f=1)
 {
	   echo '<script type="text/javascript">
          alert("SEAT ALREADY BOOKED!!!"); 
          window.location.href="http://localhost/appda1/conductor_alter.php";
        </script>'; 
 }	 
 
  }
    else
  {
	    echo '<script type="text/javascript">
          alert("INVALID SOURCE OR DESTINATION!!!"); 
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
  
 mysqli_close($conn);
 }
 
?>