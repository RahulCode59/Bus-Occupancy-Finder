<!DOCTYPE html>
<html>
<style>
body{
	  
	  background-image:url("All Setra Wallpaper HD.jpg");
	   background-size:100% 120%;
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
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width:25%;
    background-color:orange;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	text-align:center;
	margin-left:10px;
}

input[type=submit]:hover {
    background-color:grey;
}

.cancel {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding:20px;
	border:1px solid black;
	margin-left:230px;
	margin-right:230px;
	margin-top:150px;
}
h1{
text-align:center;
color:red;
}
</style>
<body>
<center><br>
<nav>
 <div class="navbar">
  <a href="buso.php">HOME</a>
  <a href="nxte.php">BOOKING</a>
   <a href="ticket cancel.php">CANCELLATION</a>
  <a href="contact us form.php">CONTACT</a>
   <a href="feedback form.php">FEEDBACK</a>
   <a href="login.php">LOGIN</a>
   <a href="admin.php">MASTER LOGIN</a>
</div>
</nav>
<br> 
<div class="cancel">
    <h1><b>Cancel Your Booking</b></h1>
	<p>If you are not able to cancel ticket, please mail us at Findbuses@gmail.com</p>
	<form action="cancel.php" method="post">
    <label for="fname"><b>Bus no.</b></label>
    <input type="text" id="fname" required name="Busno" placeholder="Bus no. here..">

    <label for="lname"><b>Booking Id</b></label>
    <input type="text" id="lname" required name="BookingId" placeholder="Booking Id here..">
    
	<input type="submit" value="Cancel ticket">
  </form>
</div>

</body>
</html>