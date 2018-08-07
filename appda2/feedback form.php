<html>
<body>
<html>
<body>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body{
	  
	  background-image:url("VDL-Futura-FHD2-106_aangepast_1.jpg");
	   background-size:100% 130%;
	    background-repeat:no-repeat;
		font-family: Arial, Helvetica, sans-serif;
  
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
 
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	margin-top:50px;
}
</style>
</head>
<body>

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


<div class="container">
<h3>Feedback Form</h3>
<br>
 <form action="action_page.php" method="post"> 
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname"required placeholder="Your first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
	
    <label for="contact no.">contact no.</label>
    <input type="text" id="contact no." name="contactno" required placeholder="Contact no.">

	Feedback type:  
	<label>Suggestions<input type="checkbox" value="1"  name="select[]"></label>
    <label>Complaints<input type="checkbox"  value="2"  name="select[]"></label>
	<label>Compliments<input type="checkbox" value="3"  name="select[]"></label>
	<br>
	<br>
	
    <label for="Subject">Subject</label>
    <select id="city" required name="selectservice">
    <option value=""disabled selected>Select service</option>
    <option value="Busservice">Bus service</option>
    <option value="Website">Website</option>
    <option value="Callcenter">Call center</option>
	<br>
	
	Feedback:
    <textarea id="subject1" name="subject"required placeholder="Write your feedback here.." style="height:200px"></textarea>
	
	<input type="submit" value="Submit Feedback">
  </form>
</div>
</body>
</html>
</body>
</html>