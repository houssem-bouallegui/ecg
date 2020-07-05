<?php
	include('connexion.php');
	if(isset($_POST['button'])) { 
			
			$prenom=$_POST["prenom"];
			$nom=$_POST["nom"];
			$birthday=$_POST["birthday"];
			$gender=$_POST["gender"];
			$email=$_POST["email"];
			$phone=$_POST["phone"];
		    $address=$_POST["address"];
			
			$sql = "SELECT * FROM person WHERE Nom = '$nom' and Prenom ='$prenom' and DateN = '$birthday'";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {
			  echo "erreur .'<br>'";
			  
			} else {
			  echo "Enregistrement <br>";
			  $sql2 = "INSERT INTO person (Nom, Prenom, DateN, sexe, email, num, adr) VALUES ('$nom', '$prenom', '$birthday', '$gender', '$email', '$phone', '$address')";
			  if($result2 = $db->query($sql2) === TRUE){
				  echo "Enregistrer <br>";
			} else {
			echo "Error enregistrement <br>" . $db->error;  }
        } 
	
	}
	
	
	
	?>