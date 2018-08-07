<!doctype html>
<html>
<style>
   
  body{
	  
	  background-image:url("VDL-Futura-FHD2-106_aangepast_1.jpg");
	   background-size:100% 130%;
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
 radio{float left;}

</style>
<body >
<div id="google_translate_element" style="margin-left:1150px;margin-top:60px"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi,pa', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
       
<center><br>
<div class="navbar">
  <a href="buso.php">HOME</a>
  <a href="nxte.php">BOOKING</a>
   <a href="ticket cancel.php">CANCELLATION</a>
   <a href="contact us form.php">CONTACT</a>
   <a href="feedback form.php">FEEDBACK</a>
   <a href="login.php">LOGIN</a>
   <a href="admin.php">MASTER LOGIN</a>
</div>
 <h1><B><font color="white">SEAT BOOKING</font></h1></B>
<!-- <form action="select1.php" method="post">

 <select name ="Source" class="required-entry" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required style="height:55px;width:130px;margin-top:110px;margin-left:0px;margin-right:10px;margin-bottom:10px;height:55px;background-color: #e59866 ;border-color:#e59866;border-radius:8px">
    -->
 <form action="select10.php" method="post">
 <select name ="Source" class="required-entry" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required style="height:55px;width:130px;margin-top:90px;margin-left:0px;margin-right:10px;margin-bottom:10px;height:55px;background-color: #e59866;border-color: #e59866;border-radius:8px">
	<option value="" disabled selected>SOURCE</option>
			<option value="New Delhi">NEW DELHI</option>
            <option value="Sonipat">SONIPAT</option>
			<option value="Karnal">KARNAL</option>
			<option value="Ambala">AMBALA</option>
			<option value="Ludhiana">LUDHIANA</option>
			<option value="Jalandhar">JALANDHAR</option>
			<option value="Amritsar">AMRITSAR</option>
			<option value="Jammu">JAMMU</option>
        </select>
		
		<select name="source_stop" id="source_stop"style="height:55px;width:130px;margin-top:110px;margin-left:0px;margin-right:10px;margin-bottom:10px;height:55px;background-color:#e59866;border-color:#e59866;border-radius:8px">
        <option value="" disabled selected>PICK UP STOP</option> 
		 </select>
		 
		 <select name="To" class="required-entry" onchange="javascript:dynamicdropdown2(this.options[this.selectedIndex].value);" required style="margin-top:110px;margin-left:10px;margin-right:10px;margin-bottom:10px;height:55px;width:130px;background-color:#e59866;border-color:#e59866;border-radius:8px">
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
 <select name="destination_stop" id = "destination_stop" style="height:55px;width:130px;margin-top:110px;margin-left:10px;margin-right:10px;margin-bottom:10px;height:55px;background-color:#e59866;border-color:#e59866;border-radius:8px">
 <option value="" disabled selected>DROP OFF STOPP</option>
 </select>
 <br>
 <form>
 <input type="radio" name="ll" value="1" id="dd" onclick= "getRadioVal()" style="color:white;margin-top:100px;width:20px;height:20px;font-size:30;border-radius:8px;margin:3px;border-radius:8px"><B style="color:white">One way</B>
 <input type="radio" name="ll" value="2" id="dd1" onclick= "getRadioVal1()" style="color:white;margin-top:110px;width:20px;height:20px;font-size:30;border-radius:8px;margin:3px;border-radius:8px"><B style="color:white">Two way</B>
<form>
 </div>
<br>
  <!--<B style="color:white">TIME:</B><input type="time"id="data_time" placeholder="Enter Time" name="time" style="margin-top:40px;margin-left:10px;width:125px;margin-right:10px;margin-bottom:50px;height:25px;background-color:#e59866;border-color:#e59866;border-radius:8px" />
  --><B style="color:white">DATE:</B><input type="date"id="data_date" placeholder="Enter Date" name="date" style="margin-top:40px;margin-left:10px;width:125px;margin-right:10px;margin-bottom:50px;height:25px;background-color:#e59866;border-color:#e59866;border-radius:8px" />
 <B style="color:white">DATE:</B><input type="date"id="data_date2" placeholder="Enter Date" name="date1" style="margin-top:40px;margin-left:10px;width:125px;margin-right:10px;margin-bottom:50px;height:25px;background-color:#e59866;border-color:#e59866;border-radius:8px" />
 <br>
 <input type="checkbox" name="select[]" value="1" style="color:white;margin-top:110px;width:20px;height:20px;font-size:30;border-radius:8px;margin:3px;border-radius:8px"><B style="color:white">Deluxe Bus</B>
 <input type="checkbox" name="select[]" value="2" style="color:white;margin-top:110px;width:20px;height:20px;font-size:30;border-radius:8px;margin:3px;border-radius:8px"><B style="color:white">Non Deluxe Bus</B>
 <br>
 <input type="submit" value="FIND BUSES" style="margin-top:30px;height:60px;font-size:40;background-color:#e59866;border-color:#e59866;border-radius:8px">
       
		<script language="javascript" type="text/javascript">
		
            function dynamicdropdown(listindex)
            {
                document.getElementById("source_stop").length = 0;
                switch (listindex)
                {
                    case "New Delhi" :
                        document.getElementById("source_stop").options[0]=new Option("PICK UP STOP ","");
                        document.getElementById("source_stop").options[1]=new Option("ISBT","ISBT");
                        document.getElementById("source_stop").options[2]=new Option("INDIA GATE","INDIA GATE");
                        document.getElementById("source_stop").options[3]=new Option("RED FORT","RED FORT");
                        document.getElementById("source_stop").options[4]=new Option("CHANDNI CHOWK","CHANDNI CHOWK");
                        document.getElementById("source_stop").options[5]=new Option("BUS STOP","BUS STOP");
                        break;
                    
                    case "Sonipat" :
                        document.getElementById("source_stop").options[0]=new Option("PICK UP STOP","");
                        document.getElementById("source_stop").options[1]=new Option("MAHARANA CHOWK","MAHARANA CHOWK");
                        document.getElementById("source_stop").options[2]=new Option("BUS STAND","BUS STAND");
                        break;
                    case "Karnal" :
                        document.getElementById("source_stop").options[0]=new Option("PICK UP STOP","");
                        document.getElementById("source_stop").options[1]=new Option("NIRMAL CHOWK","NIRMAL CGOWK");
                        document.getElementById("source_stop").options[2]=new Option("BUS STAND","BUS STAND");
                        document.getElementById("source_stop").options[3]=new Option("CITY CENTRE","CITY CENTER");
                        document.getElementById("source_stop").options[4]=new Option("BASTI","BASTI");
                        document.getElementById("source_stop").options[5]=new Option("LAILA CHOWK","LAILA CHOWK");
                        break;
                    case "Ambala" :
                        document.getElementById("source_stop").options[0]=new Option("PICK UP STOP","");
                        document.getElementById("source_stop").options[1]=new Option("AMBALA CITY","AMBALA CITY");
						document.getElementById("source_stop").options[2]=new Option("ISBT","ISBT");
					    document.getElementById("source_stop").options[3]=new Option("AMBALA CANT","AMBALA CANT");
                        break;
				     case "Ludhiana" :
                        document.getElementById("source_stop").options[0]=new Option("PICK UP STOP","");
                        document.getElementById("source_stop").options[1]=new Option("SAMRALA CHOWK","SAMRALA CHOWK");
                        document.getElementById("source_stop").options[2]=new Option("BASTI CHOWK","BASTI CHOWK");
                        document.getElementById("source_stop").options[3]=new Option("ISBT","ISBT");
                        document.getElementById("source_stop").options[4]=new Option("PREET PALACE","PREET PALACE");
                        document.getElementById("source_stop").options[5]=new Option("CHD ROAD","CHD ROAD");
                        break;
					 case "Jalandhar" :
                       document.getElementById("source_stop").options[0]=new Option("PICK UP STOP","");
                        document.getElementById("source_stop").options[1]=new Option("FOOTBALL CHOWK","FOOTBALL CHOWK");
                        document.getElementById("source_stop").options[2]=new Option("PATHANKOT","PATHANKOT");
                        document.getElementById("source_stop").options[3]=new Option("GORAYAN","GORAYAN");
                        document.getElementById("source_stop").options[4]=new Option("LADOWAL","LADOWAL");
                        document.getElementById("source_stop").options[5]=new Option("ISBT","ISBT");
                        break;
                     case "Amritsar" :
                        document.getElementById("source_stop").options[0]=new Option("PICK UP STOP","");
                        document.getElementById("source_stop").options[1]=new Option("GNDU","GNDU");
                        document.getElementById("source_stop").options[2]=new Option("GOLDEN CHOWK","GOLDEN CHOWK");
                        document.getElementById("source_stop").options[3]=new Option("BUS STAND","BUS STAND");
                        document.getElementById("source_stop").options[4]=new Option("JVBAGH","JVBAGH");
                        break;
			         case "Jammu":
                        document.getElementById("source_stop").options[0]=new Option("PICK UP STOP","");
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
                        document.getElementById("destination_stop").options[0]=new Option("DROP OFF STOP","","");
			            document.getElementById("destination_stop").options[1]=new Option("ISBT","ISBT");
                        document.getElementById("destination_stop").options[2]=new Option("INDIA GATE","INDIA GATE");
                        document.getElementById("destination_stop").options[3]=new Option("RED FORT","RED FORT");
                        document.getElementById("destination_stop").options[4]=new Option("CHANDNI CHOWK","CHANDNI CHOWK");
                        document.getElementById("destination_stop").options[5]=new Option("BUS STOP","BUS STOP");
                        break;
                    
                    case "Sonipat" :
                        document.getElementById("destination_stop").options[0]=new Option("DROP OFF STOP","");
                        document.getElementById("destination_stop").options[1]=new Option("MAHARANA CHOWK","MAHARANA CHOWK");
                        document.getElementById("destination_stop").options[2]=new Option("BUS STAND","BUS STAND");
                        break;
                    case "Karnal" :
                        document.getElementById("destination_stop").options[0]=new Option("DROP OFF STOP","");
                        document.getElementById("destination_stop").options[1]=new Option("NIRMAL CHOWK","NIRMAL CGOWK");
                        document.getElementById("destination_stop").options[2]=new Option("BUS STAND","BUS STAND");
                        document.getElementById("destination_stop").options[3]=new Option("CITY CENTRE","CITY CENTER");
                        document.getElementById("destination_stop").options[4]=new Option("BASTI","BASTI");
                        document.getElementById("destination_stop").options[5]=new Option("LAILA CHOWK","LAILA CHOWK");
                        break;
                    case "Ambala" :
                        document.getElementById("destination_stop").options[0]=new Option("DROP OFF STOP","");
                        document.getElementById("destination_stop").options[1]=new Option("AMBALA CITY","AMBALA CITY");
						document.getElementById("destination_stop").options[2]=new Option("ISBT","ISBT");
					     document.getElementById("destination_stop").options[3]=new Option("AMBALA CANT","AMBALA CANT");
                        break;
				     case "Ludhiana" :
                        document.getElementById("destination_stop").options[0]=new Option("DROP OFF STOP","");
                        document.getElementById("destination_stop").options[1]=new Option("SAMRALA CHOWK","SAMRALA CHOWK");
                        document.getElementById("destination_stop").options[2]=new Option("BASTI CHOWK","BASTI CHOWK");
                        document.getElementById("destination_stop").options[3]=new Option("ISBT","ISBT");
                        document.getElementById("destination_stop").options[4]=new Option("PREET PALACE","PREET PALACE");
                        document.getElementById("destination_stop").options[5]=new Option("CHD ROAD","CHD ROAD");
                        break;
					 case "Jalandhar" :
                        document.getElementById("destination_stop").options[0]=new Option("DROP OFF STOP","");
                        document.getElementById("destination_stop").options[1]=new Option("FOOTBALL CHOWK","FOOTBALL CHOWK");
                        document.getElementById("destination_stop").options[2]=new Option("PATHANKOT","PATHANKOT");
                        document.getElementById("destination_stop").options[3]=new Option("GORAYAN","GORAYAN");
                        document.getElementById("destination_stop").options[4]=new Option("LADOWAL","LADOWAL");
                        document.getElementById("destination_stop").options[5]=new Option("ISBT","ISBT");
                        break;
                     case "Amritsar" :
                        document.getElementById("destination_stop").options[0]=new Option("DROP OFF STOP","");
                        document.getElementById("destination_stop").options[1]=new Option("GNDU","GNDU");
                        document.getElementById("destination_stop").options[2]=new Option("GOLDEN CHOWK","GOLDEN CHOWK");
                        document.getElementById("destination_stop").options[3]=new Option("BUS STAND","BUS STAND");
                        document.getElementById("destination_stop").options[4]=new Option("JVBAGH","JVBAGH");
                        break;
			         case "Jammu":
                        document.getElementById("destination_stop").options[0]=new Option("DROP OFF STOP","");
                        document.getElementById("destination_stop").options[1]=new Option("CITY CENTRE","CITY CENTRE");
                        document.getElementById("destination_stop").options[2]=new Option("ISBT","ISBT");
					    document.getElementById("destination_stop").options[3]=new Option("BUS STAND","BUS STAND");
                        break;
                }
                return true;
            }
			function getRadioVal() {
		  var x = document.getElementById("dd").value;	
		  if(x==1)
	      {document.getElementById("data_date2").disabled = true}
            
        }
		function getRadioVal1() {
		  var x = document.getElementById("dd1").value;	
		  if(x==2)
	      {document.getElementById("data_date2").disabled = false}
            
        }
       </script>
	   </form>
    </body>
</html>
