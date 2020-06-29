<!DOCTYPE html> 

<html>
<head>
	<link rel="stylesheet" type="text/css" href="testmanuel.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body background="a.jpg">
<br>
<div class="header">
	<center><p>PORTABLE ECG MONITORING</p></center>
</div>


<?php
      
        if(isset($_POST['button1'])) { 
			shell_exec('cd /home/pi/PFE');
           $output = shell_exec('ls -lart');
		   echo "<pre>$output</pre>";; 
        } 
        if(isset($_POST['button2'])) { 
			shell_exec('cd /home/pi/PFE');
            echo "This is Button2 that is selected"; 
        }
		     
        if(isset($_POST['button3'])) { 
			shell_exec('cd /home/pi/PFE');
            echo "This is Button1 that is selected"; 
        } 
        if(isset($_POST['button4'])) { 
			shell_exec('cd /home/pi/PFE');
            echo "This is Button2 that is selected"; 
        }
		     
        if(isset($_POST['button5'])) {
				shell_exec('cd /home/pi/PFE');
            echo "This is Button1 that is selected"; 
        } 	
    ?> 
<form method="post"> 
<div class="box">
<ol class="odd center">
  <li class="hex">
    <div class="hex-content"><center>Lancer le script d’acquisition<br>Temps :<input type="number" min="10" max="30" step="1" value="10" class="time" /><input type="submit" name="button1" value="Button1"  ></center></div>
  </li>
  <li class="hex">
    <div class="hex-content">Afficher la courbe ECG <br><center><i class="material-icons" style="font-size:30px">vpn_key</i></center><input type="submit" name="button2" value="Button2"  ></div>
  </li>
  <li class="hex">
    <div class="hex-content">Lancer le traitement de DATASET <br><center><i class="material-icons" style="font-size:30px">vpn_key</i></center><input type="submit" name="button1" value="Button3"  ></div>
  </li>
  <li class="hex">
    <div class="hex-content">Afficher la DATASET <br><center><i class="material-icons" style="font-size:30px">vpn_key</i></center><input type="submit" name="button1" value="Button4"  ></div>
  </li>
  <li class="hex">
    <div class="hex-content">Comparaison des DATASET <br><center><i class="material-icons" style="font-size:30px">vpn_key</i></center><input type="submit" name="button1" value="Button5"  ></div>
  </li>
</ol> 
</div>
</form>
</body>
</html>