<html>
<center>
<h1 style="color:blue;"> IOT based  Home automation</h1>
<h1 style="color:blue;" >LEON TECH</h1>
<img src="Diving-into-smart-home-automation.jpg"  width="1000" height="300">
<body style="background-color:lightblue;" >

<br>
<h1 style="color:white;"> ROOM1 DEVICE CONTROL<h1>
</center>
<!-- in the <button> tags below the ID attribute is the value sent to the arduino -->
<left>
<p>LIGHT CONTROL	
	<button id="1" class="led">Light On</button> <!-- button for pin 11 -->
<button id="2" class="led">Light Off</button> <!-- button for pin 12 --></p>

<br>
<p>FAN CONTROL
<button id="3" class="led">Fan On</button> <!-- button for pin 13 -->	
<button id="4" class="led">Fan Off</button> <!-- button for pin 13 -->
</p>		
	<script src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".led").click(function(){
				var p = $(this).attr('id'); // get id value (i.e. pin13, pin12, or pin11)
				// send HTTP GET request to the IP address with the parameter "pin" and value "p", then execute the function
				$.get("http://192.168.0.22:80/", {pin:p}); // execute get request
			});
		});
	</script>

<p>Pls click the below link to findut the Garbage level</p>
<a href="http://192.168.0.13/neww.txt">Garbage level</a>


<?php
if (isset($_GET['data']))
{$value1= $_GET['data'];


$myFile = "neww.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $value1);
fclose($fh);
}

?>
</body>
</html>