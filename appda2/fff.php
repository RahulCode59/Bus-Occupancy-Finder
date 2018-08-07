<?php
session_start();
$bno=$_GET['f_name'];
$_SESSION['fbno']=$bno;
$us=$_GET['us_city'];
$_SESSION['fus']=$us;
$ud=$_GET['ud_city'];
$_SESSION['fud']=$ud;
$price=$_GET['price'];
$_SESSION['fprice']=$price;
$time=$_GET['time'];
$_SESSION['ftime']=$time;
$date=$_GET['date'];
$_SESSION['fdate']=$date;
$seat=$_GET['seat'];
$_SESSION['s']=$seat;
$s=explode(",",$seat);
$sbook=$_GET['book'];  
$_SESSION['sb']=$sbook;
$sb=explode(",",$sbook);
$uni=$_SESSION['unique'];
$_SESSION['abc']=$uni;
?>
<!DOCTYPE html>
<html>
<head>
<style>
table,td,th{
	border: 1px solid black;
	border-collapse:collapse;
	padding-left:10px;

}
.btn{
	
	margin-top:10px;
	margin-bottom:20px;
     padding: 7px;
     width: 100%;
}
#ticket
{
	margin-top:50px;
	margin-left:450px;
	/*margin-right:300px;*/
	border:1px solid black;
	background-color:#FFDEAD;
	width:400px;
	height:auto;
}
</style>
    <title>registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

	<h1><u>TICKET  GENERATION  FORM</u></h1>
	<div id="ticket">
	<form method="POST" style = "margin-top:20px"action="index.php">
	First Name:-
	 <input type="text" name="firstname"required class="textInput" style = "margin-top:0px "placeholder="firstname">
	Last Name:-
	 <input type="text" name="lastname"required class="textInput" placeholder="lastname">
	Email-Id :-
	 <input type="email" name="email"required class="textInput" placeholder="E-mail">
   Select country<select name="Source" required required class="required-entry" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required style="height:25px;width:100px;margin-top:5px;margin-left:0px;margin-right:10px;margin-bottom:10px;height:25px;background-color:white;border-color:#f4d03f;border-radius:3px">
             <option value="" disabled selected>COUNTRY</option>
			<option value="INDIA">INDIA(+91)</option>
            <option value="UK">UK(+44)</option>
			<option value="AUSTRALIA">AUSTRALIA(+61)</option>
			<option value="CHINA">CHINA(+86)</option>
			<option value="GERMANY">GERMANY(+49)</option>
        </select>
		<br>
		Contact no:-
		<input type="tel" pattern="[0-9]{10}"  name="phone_no"required class="textInput" placeholder="contact no:">
<font size="5" color="brown">
	<!--<h6>*Dialing code is required</h6>
    --></font>
<br>
	<p style = "margin-top:10px"id="price"><u>PRICE</u>:- 
	<?php
	 echo $price;
	?></p>
	<p id="Time"><u>Departure Time</u>:- 
	<?php
	 echo $time;
	?></p>
	<p id="DATE"><u>Date</u>:- 
	<?php
	 echo $date;
	?></p>
	<table class="data-table">
			<tr>
				<th>Selected Seats</th>
				<th>Booking Id</th>
			</tr>
		
		<?php
	for($a=0;$a<count($sb);$a++){
	echo'<tr><td>'.$s[$a] .'</td>
	<td>' .$sb[$a].'</td></tr>'; }
	?>
   <!--<p id="SEAT_INFO">Selected Seats    Booking Id:- 
	<?php
	for($a=0;$a<count($sb);$a++){
	echo $s[$a] ."        " .$sb[$a]."<br>"; }
	?></p>-->
	</table>
	<input type="submit" value="Book now" style = " margin-bottom:41%"   class="btn" name="registor">

	</form>
	</div>
	
	</body>
</html>
