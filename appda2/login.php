<?php 
session_start();
if(isset($_SESSION["user"])){
  header("Location: http://localhost/appda2/conductor_alter.php");
}else{
?>
<!DOCTYPE HTML>
<html>
<style>
  body{
	  
	  background-image:url("cybersecurity4.jpg");
	   background-size:100%;
	    background-repeat:no-repeat;
		
  
  }
   .navbar
 {
    background-color:transparent;
	text-color: blue;
    position:fixed; 
	top: 0;
	width: 110%;
	text-align:center;
	margin:0px
}

.navbar a 
{
    float:left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding:16px 24px;
    text-decoration: none;
	margin-top:0%
	margin-left:0%;
	margin-right:0%;
	
}


.navbar a:hover
 {
    background: #ddd;
    color: black;
 }

</style>
<body >
<center><br/>
<div class="navbar">
  <a href="buso.php">HOME</a>
  <a href="nxte.php">BOOKING</a>
  <a href="ticket cancel.php">CANCELLATION</a>
  <a href="contact us form.php">CONTACT</a>
   <a href="feedback form.php">FEEDBACK</a>
   </div>
   <br>
   <br>
<h1 style="color:white ;margin-top:80px" >CONDUCTOR LOGIN<h1/>
<br>
<form action="conductorlogin.php" method="post">

<B style="color:white">Username:</B>
<input type="text"  required name="username" style="width:110px;height:20px;font-size:20;border-radius:8px;margin:30px">

<B style="color:white">Password:</B>
<input type="password"  required name="password" style="width:110px;height:20px;font-size:20;border-radius:8px;margin:30px"><br/>

<input type="submit" value="Login" style="color:white; background-color:#1B4F72;width:120px;height:60px;font-size:30;border-radius:8px;margin-top:60px">
</form>
</body>
</html>
<?php
}
?>
