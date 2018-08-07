<?php
session_start();
if(($_SERVER["REQUEST_METHOD"] == "POST"))
{
 $dbname="busoccupancy2";
 $servername="localhost";
 $username="root";
 $password="";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 if(!$conn){
   die("connection failed:".mysqli_connect_error());
  }
 $bno=$_SESSION['buso'];
 $us=$_SESSION['us'];
 $ud=$_SESSION['ud'];
 $i=-1;

   if(!empty($_POST['seat'])){
	   foreach($_POST['seat'] as $check){
		  if ($check!=0)
		  {
			  $seatarray[++$i]=$check;
		  }
		  
   }

}
if(($i==-1)){
	 echo '<script type="text/javascript">alert("NO SEAT SELECTED!!!");
       window.location.href="http://localhost/appda2/buso.php";	 
       </script>';
		
}
else{
$sll="select date,start_time from busnew where busno=$bno";
$qll=mysqli_query($conn,$sll);
if(mysqli_num_rows($qll)>0){
	while($result=mysqli_fetch_array($qll)){
		$date=$result['date'];
		$times=$result['start_time'];
	}
}

for($a=0;$a<=$i;$a++){
     $s6="select type from seats where seatno='$seatarray[$a]'";
	       $q6=mysqli_query($conn,$s6);
	     if(mysqli_num_rows($q6)>0){
		 while($res3=mysqli_fetch_array($q6))
		{
            $type=$res3['type'];
			
    	}
	  }
	    $sql3="select sum(citykm) as dist from cityno where cityid >$us and cityid<=$ud;";
		    $query3=mysqli_query($conn,$sql3);
		    if(mysqli_num_rows($query3)>0){
			while ($res = mysqli_fetch_array($query3)){
				$dist=$res['dist'];	
				$time=$res['dist']*1.5;
				$hrs=(int)($time/60);
				$min=(int)($time-($hrs*60));
				$sec=(int)(($time*60)-($hrs*60*60)-($min*60));
			  }
		   }
		   list($hour,$minute,$second) = explode(':', $times);
			$hrs+=$hour;
			$min+=$minute;
			$sec+=$second;
			$time=$hrs.":".$min.":".$sec;
		   $price=$dist*1.5*($i+1);
		$s1="insert into `$bno` (seatno,type,bsource,bdestination) values ('$seatarray[$a]','$type',$us,$ud);";
		 $q1=mysqli_query($conn,$s1);
		  if(!$q1)
	      {
			  die("INSERTION ERROR");
		  }		
        $s0="select bookingid from `$bno` where seatno=$seatarray[$a] and bsource=$us and bdestination=$ud";
			  $q0=mysqli_query($conn,$s0);
			  if(mysqli_num_rows($q0)>0){
				  while($resul=mysqli_fetch_array($q0)){
					  $bookingid[$a]=$resul['bookingid'];
					  echo $bookingid[$a];
				  }
			  }		  
	   }     
	         $seatbook=implode(",",$bookingid);
	         $seatstring= implode(",",$seatarray);
		     header('location:http://localhost/appda2/fff.php?f_name='.$bno.'&us_city='.$us.'&ud_city='.$ud.'&price='.$price.'&time='.$time.'&date='.$date.'&seat='.$seatstring.'&book='.$seatbook);
		 	
}
}
?>