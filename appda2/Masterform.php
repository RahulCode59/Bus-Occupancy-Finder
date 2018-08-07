<html>
<body>
<html>
<body>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

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
}
h3{
text-align:center;
}
</style>
</head>
<body>

<h3>Master Form</h3>

<div class="container">
  <form action="adminchange.php" method="POST">
    <label for="fname">Bus no.</label>
    <input type="text" id="fname" name="busno"required placeholder="Bus no. here..">
	
    <label for="fname">Conductor ID</label>
    <input type="text" id="fname" name="cid"required placeholder="Conductor ID here..">

    <label for="lname">Source</label>
    <input type="text" id="lname" name="sour"required placeholder="Source here..">
	
	 <label for="lname">Route no.</label>
    <input type="text" id="lname" name="route"required placeholder="Route here..">
	
	<select name="bus_type" id="bus_type" >
        <option value="" disabled selected>SELECT BUS TYPE</option> 
		 <option value="1" >DELUXE</option> 
		<option value="2" >NON DELUXE</option> 
		
		 </select>
	
	<label for="lname">Destination</label>
    <input type="text" id="lname" name="dest"required placeholder="Destination here..">
    Date
	<br>
	<input type="date" id="DT1" name="date" placeholder="enter time"required>
	<br>
	<br>
	
    Time
	<br>
	<input type="time" id="DT2" name="time" placeholder="enter date"required>

	<br>
	<br>
	<input type="submit" value="Submit">
  </form>
</div>
</body>
</html>
</body>
</html>