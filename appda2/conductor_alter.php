<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: http://localhost/appda2/conductor_alter.php");
}else{
?>
<!DOCTYPE HTML>
<html>
<style>
  body{
	  
	  background-image:url("login-page-background-2.jpg");
	   background-size:100% 140%;
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
  <a href="contact us form.php">CONTACT</a>
   <a href="feedback form.php">FEEDBACK</a>
   <a href="logout.php">LOGOUT</a>
   </div>
  <br>
   <br>
<h1>ADD DETAILS OF SEATS HERE</h1>
<h3>Welcome Conductor <?=$_SESSION["user"];?>
<br>
<form action="conductorbooking.php" method="post">

<select name ="Source" class="required-entry" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required style="height:55px;width:130px;margin-top:50px;margin-left:0px;margin-right:10px;margin-bottom:10px;height:55px;background-color:#AED6F1;border-color:#AED6F1;border-radius:8px">
             <option value="" disabled selected>SOURCE CITY</option>
			<option value="New Delhi">NEW DELHI</option>
            <option value="Sonipat">SONIPAT</option>
			<option value="Karnal">KARNAL</option>
			<option value="Ambala">AMBALA</option>
			<option value="Ludhiana">LUDHIANA</option>
			<option value="Jalandhar">JALANDHAR</option>
			<option value="Amritsar">AMRITSAR</option>
			<option value="Jammu">JAMMU</option>
        </select>
		
		<select name="source_stop" id="source_stop"  style="height:55px;width:130px;margin-top:50px;margin-left:0px;margin-right:10px;margin-bottom:10px;height:55px;background-color:#AED6F1;border-color:#AED6F1;border-radius:8px">
        <option value="" disabled selected>BUS TO STOP AT</option> 
		 </select>
		  <select name="To" class="required-entry" onchange="javascript:dynamicdropdown2(this.options[this.selectedIndex].value);" required style="margin-top:50px;margin-left:10px;margin-right:10px;margin-bottom:10px;height:55px;width:130px;background-color:#AED6F1;border-color:#AED6F1;border-radius:8px">
            <option value="" disabled selected>DESTINATION</option>
            <option value="New Delhi">NEW DELHI</option>
            <option value="Sonipat">SONIPAT</option>
			<option value="Karnal">KARNAL</option>
			<option value="Ambala">AMBALA</option>
			<option value="Ludhiana">LUDHIANA</option>
			<option value="Jalandhar">JALANDHAR</option>
			<option value="Amritsar">AMRITSAR</option>
			<option value="Jammu">JAMMU</option>
 </select>
 <select name="destination_stop" id = "destination_stop"  style="height:55px;width:130px;margin-top:50px;margin-left:10px;margin-right:10px;margin-bottom:10px;height:55px;background-color:#AED6F1;border-color:#AED6F1;border-radius:8px">
 <option value="" disabled selected>BUS TO STOP AT</option>
 </select>
<br>
<br>
 <!-- <B >TIME:</B><input type="time"id="data_time" placeholder="Enter Time" required style="margin-top:10px;margin-left:10px;width:125px;margin-right:10px;margin-bottom:20px;height:25px;background-color:#AED6F1;border-color:#AED6F1;border-radius:8px" />
  <B >DATE:</B><input type="date"id="data_date" placeholder="Enter Date" required style="margin-top:10px;margin-left:10px;width:125px;margin-right:10px;margin-bottom:20px;height:25px;background-color:#AED6F1;border-color:#AED6F1;border-radius:8px" />
 <br>-->
Enter Seat Number:
<input type="text"  required name="seatno" style="height:55px;width:130px;margin-top:10px;margin-left:10px;margin-right:10px;margin-bottom:10px;height:55px;background-color:#AED6F1;border-color:#AED6F1;border-radius:8px">
<br>

 <a href="clear.php">CLEAR ALL BOOKINGS</a>





<script language="javascript" type="text/javascript">


		
            function dynamicdropdown(listindex)
            {
                document.getElementById("source_stop").length = 0;
                switch (listindex)
                {
                    case "New Delhi" :
                        document.getElementById("source_stop").options[0]=new Option("STOPS","");
                        document.getElementById("source_stop").options[1]=new Option("ISBT","ISBT");
                       document.getElementById("source_stop").options[2]=new Option("INDIA GATE","INDIA GATE");
                        document.getElementById("source_stop").options[3]=new Option("RED FORT","RED FORT");
                        document.getElementById("source_stop").options[4]=new Option("CHANDNI CHOWK","CHANDNI CHOWK");
                        document.getElementById("source_stop").options[5]=new Option("BUS STOP","BUS STOP");
                        break;
                    
                    case "Sonipat" :
                        document.getElementById("source_stop").options[0]=new Option("STOPS","");
                        document.getElementById("source_stop").options[1]=new Option("MAHARANA CHOWK","MAHARANA CHOWK");
                        document.getElementById("source_stop").options[2]=new Option("BUS STAND","BUS STAND");
                        break;
                    case "Karnal" :
                        document.getElementById("source_stop").options[0]=new Option("STOPS","");
                        document.getElementById("source_stop").options[1]=new Option("NIRMAL CHOWK","NIRMAL CGOWK");
                        document.getElementById("source_stop").options[2]=new Option("BUS STAND","BUS STAND");
                        document.getElementById("source_stop").options[3]=new Option("CITY CENTRE","CITY CENTER");
                        document.getElementById("source_stop").options[4]=new Option("BASTI","BASTI");
                        document.getElementById("source_stop").options[5]=new Option("LAILA CHOWK","LAILA CHOWK");
                        break;
                    case "Ambala" :
                        document.getElementById("source_stop").options[0]=new Option("STOPS","");
                        document.getElementById("source_stop").options[1]=new Option("AMBALA CITY","AMBALA CITY");
						document.getElementById("source_stop").options[2]=new Option("ISBT","ISBT");
					    document.getElementById("source_stop").options[3]=new Option("AMBALA CANT","AMBALA CANT");
                        break;
				     case "Ludhiana" :
                        document.getElementById("source_stop").options[0]=new Option("STOPS ","");
                        document.getElementById("source_stop").options[1]=new Option("SAMRALA CHOWK","SAMRALA CHOWK");
                        document.getElementById("source_stop").options[2]=new Option("BASTI CHOWK","BASTI CHOWK");
                        document.getElementById("source_stop").options[3]=new Option("ISBT","ISBT");
                        document.getElementById("source_stop").options[4]=new Option("PREET PALACE","PREET PALACE");
                        document.getElementById("source_stop").options[5]=new Option("CHD ROAD","CHD ROAD");
                        break;
					 case "Jalandhar" :
                       document.getElementById("source_stop").options[0]=new Option("STOPS","");
                        document.getElementById("source_stop").options[1]=new Option("FOOTBALL CHOWK","FOOTBALL CHOWK");
                        document.getElementById("source_stop").options[2]=new Option("PATHANKOT","PATHANKOT");
                        document.getElementById("source_stop").options[3]=new Option("GORAYAN","GORAYAN");
                        document.getElementById("source_stop").options[4]=new Option("LADOWAL","LADOWAL");
                        document.getElementById("source_stop").options[5]=new Option("ISBT","ISBT");
                        break;
                     case "Amritsar" :
                        document.getElementById("source_stop").options[0]=new Option("STOPS","");
                        document.getElementById("source_stop").options[1]=new Option("GNDU","GNDU");
                        document.getElementById("source_stop").options[2]=new Option("GOLDEN CHOWK","GOLDEN CHOWK");
                        document.getElementById("source_stop").options[3]=new Option("BUS STAND","BUS STAND");
                        document.getElementById("source_stop").options[4]=new Option("JVBAGH","JVBAGH");
                        break;
			         case "Jammu":
                        document.getElementById("source_stop").options[0]=new Option("STOPS","");
                        document.getElementById("source_stop").options[1]=new Option("CITY CENTRE","CITY CENTRE");
                        document.getElementById("source_stop").options[2]=new Option("ISBT","ISBT");
					    document.getElementById("source_stop").options[3]=new Option("BUS STAND","BUS STAND");
                        break;
                    
                    
                }
                return true;
            }
					
            function dynamicdropdown2(listindex)
            {
                document.getElementById("destination_stop").length = 0;
                switch (listindex)
                {

                    case "New Delhi" :
                        document.getElementById("destination_stop").options[0]=new Option("STOPS","","");
			            document.getElementById("destination_stop").options[1]=new Option("ISBT","ISBT");
                        document.getElementById("destination_stop").options[2]=new Option("INDIA GATE","INDIA GATE");
                        document.getElementById("destination_stop").options[3]=new Option("RED FORT","RED FORT");
                        document.getElementById("destination_stop").options[4]=new Option("CHANDNI CHOWK","CHANDNI CHOWK");
                        document.getElementById("destination_stop").options[5]=new Option("BUS STOP","BUS STOP");
                        break;
                    
                    case "Sonipat" :
                        document.getElementById("destination_stop").options[0]=new Option("STOPS","");
                        document.getElementById("destination_stop").options[1]=new Option("MAHARANA CHOWK","MAHARANA CHOWK");
                        document.getElementById("destination_stop").options[2]=new Option("BUS STAND","BUS STAND");
                        break;
                    case "Karnal" :
                        document.getElementById("destination_stop").options[0]=new Option("STOPS","");
                        document.getElementById("destination_stop").options[1]=new Option("NIRMAL CHOWK","NIRMAL CGOWK");
                        document.getElementById("destination_stop").options[2]=new Option("BUS STAND","BUS STAND");
                        document.getElementById("destination_stop").options[3]=new Option("CITY CENTRE","CITY CENTER");
                        document.getElementById("destination_stop").options[4]=new Option("BASTI","BASTI");
                        document.getElementById("destination_stop").options[5]=new Option("LAILA CHOWK","LAILA CHOWK");
                        break;
                    case "Ambala" :
                        document.getElementById("destination_stop").options[0]=new Option("STOPS","");
                        document.getElementById("destination_stop").options[1]=new Option("AMBALA CITY","AMBALA CITY");
						document.getElementById("destination_stop").options[2]=new Option("ISBT","ISBT");
					     document.getElementById("destination_stop").options[3]=new Option("AMBALA CANT","AMBALA CANT");
                        break;
				     case "Ludhiana" :
                        document.getElementById("destination_stop").options[0]=new Option("STOPS","");
                        document.getElementById("destination_stop").options[1]=new Option("SAMRALA CHOWK","SAMRALA CHOWK");
                        document.getElementById("destination_stop").options[2]=new Option("BASTI CHOWK","BASTI CHOWK");
                        document.getElementById("destination_stop").options[3]=new Option("ISBT","ISBT");
                        document.getElementById("destination_stop").options[4]=new Option("PREET PALACE","PREET PALACE");
                        document.getElementById("destination_stop").options[5]=new Option("CHD ROAD","CHD ROAD");
                        break;
					 case "Jalandhar" :
                        document.getElementById("destination_stop").options[0]=new Option("STOPS","");
                        document.getElementById("destination_stop").options[1]=new Option("FOOTBALL CHOWK","FOOTBALL CHOWK");
                        document.getElementById("destination_stop").options[2]=new Option("PATHANKOT","PATHANKOT");
                        document.getElementById("destination_stop").options[3]=new Option("GORAYAN","GORAYAN");
                        document.getElementById("destination_stop").options[4]=new Option("LADOWAL","LADOWAL");
                        document.getElementById("destination_stop").options[5]=new Option("ISBT","ISBT");
                        break;
                     case "Amritsar" :
                        document.getElementById("destination_stop").options[0]=new Option("STOPS","");
                        document.getElementById("destination_stop").options[1]=new Option("GNDU","GNDU");
                        document.getElementById("destination_stop").options[2]=new Option("GOLDEN CHOWK","GOLDEN CHOWK");
                        document.getElementById("destination_stop").options[3]=new Option("BUS STAND","BUS STAND");
                        document.getElementById("destination_stop").options[4]=new Option("JVBAGH","JVBAGH");
                        break;
			         case "Jammu":
                        document.getElementById("destination_stop").options[0]=new Option("STOPS","");
                        document.getElementById("destination_stop").options[1]=new Option("CITY CENTRE","CITY CENTRE");
                        document.getElementById("destination_stop").options[2]=new Option("ISBT","ISBT");
					    document.getElementById("destination_stop").options[3]=new Option("BUS STAND","BUS STAND");
                        break;
                }
                return true;
            }
       </script>
	   <br>
<input type="submit" value="SUBMIT" style=" background-color:#1B4F72;width:120px;height:60px;font-size:30;border-radius:8px;margin-top:60px">
</form>
</body>
</html>
<?php
}
?>

