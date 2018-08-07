<?php
session_start();
if(isset($_GET['f_name']))
{
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'busoccupancy2'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$busno=$_GET['f_name'];
$user_source=$_GET['us_city'];
$user_dest=$_GET['ud_city'];
$l=$_GET['index'];
$_SESSION['unique']= $l;
$_SESSION['buso']=$busno;
$_SESSION['us']=$user_source;
$_SESSION['ud']=$user_dest;
?>
<html>
<head>
<link href="ns.css" rel="stylesheet">
</head>
<body>
	<div id="first">
		<h1>BOOK YOUR SEAT NOW!</h1>
		<div id="second">
		
		<p id="front"<b>FRONT</b></p>
			<table class="table">
			 <tr>
  <td id="exit">EXIT</td>
  </tr>
 <form action="new.php" method="post">
  <tr>
  <section id="seats">
    <td>1</td>
      <td> <input id="1" class="seat-select" type="checkbox" value="1" name="seat[] " />
      <label for="1" class="seat">1</label></td>
      <td> <input id="2" class="seat-select" type="checkbox" value="2" name="seat[]" />
      <label for="2" class="seat">2</label></td>
	  <td><input class="no" name="seat[]" />
      <label for=""></label></td>
	  <td> <input id="3" class="seat-select" type="checkbox" value="3" name="seat[]" />
      <label for="3" class="seato">3</label></td>
      <td> <input id="4" class="seat-select" type="checkbox" value="4" name="seat[]" />
      <label for="4" class="seato">4</label></td>
   </tr>  
   
   
   	 <tr>
    <td>2</td>
      <td> <input id="5" class="seat-select" type="checkbox" value="5" name="seat[]" />
      <label for="5" class="seato2">5</label></td>
      <td> <input id="6" class="seat-select" type="checkbox" value="6" name="seat[]" />
      <label for="6" class="seato2">6</label></td>
	  <td><input class="no" name="seat[]" />
      <label for=""></label></td>
	  <td> <input id="7" class="seat-select" type="checkbox" value="7" name="seat[]" />
      <label for="7" class="seato2">7</label></td>
      <td> <input id="8" class="seat-select" type="checkbox" value="8" name="seat[]" />
      <label for="8" class="seato2">8</label></td>
   </tr>
   
     <tr>
    <td>3</td>
      <td> <input id="9" class="seat-select" type="checkbox" value="9" name="seat[]" />
      <label for="9" class="seato2">9</label></td>
      <td> <input id="10" class="seat-select" type="checkbox" value="10" name="seat[]" />
      <label for="10" class="seato2">10</label></td>
	  <td><input class="no" name="seat[]" />
      <label for=""></label></td>
	  <td> <input id="11" class="seat-select" type="checkbox" value="11" name="seat[]" />
      <label for="11" class="seato2">11</label></td>
      <td> <input id="12" class="seat-select" type="checkbox" value="12" name="seat[]" />
      <label for="12" class="seato2">12</label></td>
   </tr>
   
    <tr>
    <td>4</td>
      <td> <input id="13" class="seat-select" type="checkbox" value="13" name="seat[]" />
      <label for="13" class="seato2">13</label></td>
      <td> <input id="14" class="seat-select" type="checkbox" value="14" name="seat[]" />
      <label for="14" class="seato2">14</label></td>
	  <td><input class="no" name="seat[]" />
      <label for=""></label></td>
	  <td> <input id="15" class="seat-select" type="checkbox" value="15" name="seat[]" />
      <label for="15" class="seato2">15</label></td>
      <td> <input id="16" class="seat-select" type="checkbox" value="16" name="seat[]" />
      <label for="16" class="seato2">16</label></td>
   </tr>
   
     <tr>
    <td>5</td>
      <td> <input id="17" class="seat-select" type="checkbox" value="17" name="seat[]" />
      <label for="17" class="seato2">17</label></td>
      <td> <input id="18" class="seat-select" type="checkbox" value="18" name="seat[]" />
      <label for="18" class="seato2">18</label></td>
	  <td><input class="no" name="seat[]" />
      <label for=""></label></td>
	  <td> <input id="19" class="seat-select" type="checkbox" value="19" name="seat[]" />
      <label for="19" class="seato2">19</label></td>
      <td> <input id="20" class="seat-select" type="checkbox" value="20" name="seat[]" />
      <label for="20" class="seato2">20</label></td>
   </tr>
   
     <tr>
    <td>6</td>
      <td> <input id="21" class="seat-select" type="checkbox" value="21" name="seat[]" />
      <label for="21" class="seato2">21</label></td>
      <td> <input id="22" class="seat-select" type="checkbox" value="22" name="seat[]" />
      <label for="22" class="seato2">22</label></td>
	  <td><input class="no" name="seat[]" />
      <label for=""></label></td>
	  <td> <input id="23" class="seat-select" type="checkbox" value="23" name="seat[]" />
      <label for="23" class="seato2">23</label></td>
      <td> <input id="24" class="seat-select" type="checkbox" value="24" name="seat[]" />
      <label for="24" class="seato2">24</label></td>
   </tr>
   
     <tr>
    <td>7</td>
      <td> <input id="25" class="seat-select" type="checkbox" value="25" name="seat[]" />
      <label for="25" class="seato2">25</label></td>
      <td> <input id="26" class="seat-select" type="checkbox" value="26" name="seat[]" />
      <label for="26" class="seato2">26</label></td>
	  <td><input class="no" name="seat[]" />
      <label for=""></label></td>
	  <td> <input id="27" class="seat-select" type="checkbox" value="27" name="seat[]" />
      <label for="27" class="seato2">27</label></td>
      <td> <input id="28" class="seat-select" type="checkbox" value="28" name="seat[]" />
      <label for="28" class="seato2">28</label></td>
   </tr>
   
     <tr>
    <td>8</td>
      <td> <input id="29" class="seat-select" type="checkbox" value="29" name="seat[]" />
      <label for="29" class="seato2">29</label></td>
      <td> <input id="30" class="seat-select" type="checkbox" value="30" name="seat[]" />
      <label for="30" class="seato2">30</label></td>
	  <td><input class="no" name="seat[]" />
      <label for=""></label></td>
	  <td> <input id="31" class="seat-select" type="checkbox" value="31" name="seat[]" />
      <label for="31" class="seato2">31</label></td>
      <td> <input id="32" class="seat-select" type="checkbox" value="32" name="seat[]" />
      <label for="32" class="seato2">32</label></td>
   </tr>
   
      	 <tr>
    <td>9</td>
      <td> <input id="33" class="seat-select" type="checkbox" value="33" name="seat[]" />
      <label for="33" class="seato2">33</label></td>
      <td> <input id="34" class="seat-select" type="checkbox" value="34" name="seat[]" />
      <label for="34" class="seato2">34</label></td>
	  <td><input class="no" name="seat[]" />
      <label for=""></label></td>
	  <td> <input id="35" class="seat-select" type="checkbox" value="35" name="seat[]" />
      <label for="35" class="seato2">35</label></td>
      <td> <input id="36" class="seat-select" type="checkbox" value="36" name="seat[]" />
      <label for="36" class="seato2">36</label></td>
   </tr>
   
      	 <tr>
    <td>10</td>
      <td> <input id="37" class="seat-select" type="checkbox" value="37" name="seat[]" />
      <label for="37" class="seato2">37</label></td>
      <td> <input id="38" class="seat-select" type="checkbox" value="38" name="seat[]" />
      <label for="38" class="seato2">38</label></td>
	  <td> <input id="39" class="seat-select" type="checkbox" value="39" name="seat[]" />
      <label for="39" class="seato2">39</label></td>
      <td> <input id="40" class="seat-select" type="checkbox" value="40" name="seat[]" />
      <label for="40" class="seato2">40</label></td>
	  <td> <input id="41" class="seat-select" type="checkbox" value="41" name="seat[]" />
      <label for="41" class="seato2">41</label></td>
   </tr>
   </table>
   </div>
   </section>

				</div>
		<div id="third"><table class="t2" style="border-spacing:8px;">
			<tr>
				<td style="background-color:green;width:20px; height:2px; border-radius:3px;"</td>
				<td class="red1"  style="width:200px;">Reserved for ladies</td>
			</tr>
			<tr>
				<td style="background-color:red;border-radius:3px;"></td>
				<td class="green1" style="width:200px;">Reserved for Pwd's</td>
			</tr>
			<tr>
				<td  style="background-color:blue;border-radius:3px;"></td>
				<td class="blue1" style="width:200px;">Vacant seats</td>
			</tr>
			<tr>
				<td  style="background-color:#FAD7A0;border-radius:3px;"></td>
				<td class="blue1" style="width:200px;">Selected seats</td>
			</tr>
			<tr>
				<td  style="background-color:#d0d3d4;border-radius:3px;"></td>
				<td class="blue1" style="width:200px;">Already Booked</td>
			</tr>
			

		</table>
		
		<input type="submit" name="bsubmit" />
			</div>
			</div>
	</form>	
	</div>
	<script>
	
	function check(a) {
    document.getElementById(a).disabled = true;
	
}
	</script>
	
	</body>
	</html>
	<?php
	 $sql4="select seatno from `$busno` where  ($user_source>=bsource and $user_dest<=bdestination) or ($user_source<=bsource and $user_dest>=bdestination) or ($user_source<=bsource and $user_dest<=bdestination);";
			$query4=mysqli_query($conn,$sql4);
			if(mysqli_num_rows($query4)>0){
			while ($res1 = mysqli_fetch_array($query4)){
			$f=$res1["seatno"];
					echo '<script>check('.$f.')</script>';
			  }
		   }	
		  }
 //unset($_SESSION['bus']);
 //session_destroy();
	?>