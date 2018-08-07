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
$first=$_REQUEST['firstname'];
$last=$_REQUEST['lastname'];
$contact=$_REQUEST['contactno'];
$service=$_REQUEST['selectservice'];
$text=$_REQUEST['subject'];
$i=-1;
 if(!empty($_POST['select'])){
	  foreach($_POST['select'] as $check){
		  if ($check!=0)
		  {
			  $checkbox[++$i]=$check;
		  }
		  
   }
  }
  $string=implode(" ",$checkbox);
  $sql="insert into feedback(first,last,contact,type,service,subject)values('$first','$last','$contact','$string','$service','$text');";
  $q1=mysqli_query($conn,$sql);
  if(!$q1)
  {
	   echo '<script type="text/javascript"> alert("INVALID REQUEST!!!"); 
          window.location.href="http://localhost/appda2/feedback form.php"</script>';
  }
  else{
	   $sql2="select max(feedbackid) as id from feedback";
	   $q2=mysqli_query($conn,$sql2);
	   if(mysqli_num_rows($q2)>0){
		   while($res=mysqli_fetch_array($q2)){
			   $fid=$res['id'];
		   }
		   
	   }
	    echo '<script type="text/javascript"> alert("Your Feedback ID is :'.$fid.'!!!"); 
          window.location.href="http://localhost/appda2/thanku.php"</script>';
  }
}
?>