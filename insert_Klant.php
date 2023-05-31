<?php

if(isset($_POST["insert"]) && $_POST["insert"] == "Toevoegen"){
		
	include_once 'classes/klanten.php';
	
	$acteur = new Acteur;
	$acteur->insertActeur2($_POST['klantId'], $_POST['klantNaam'], $_POST['klantAdres'], $_POST['klantPostcode'], $_POST['klantWoonplaats'], $_POST['klantEmail']);
		
	echo "<script>alert('Acteur: $_POST[klantId] $_POST[klantNaam] is toegevoegd')</script>";
	echo "<script> location.replace('index.php'); </script>";
		
} 

?>

<!DOCTYPE html>
<html>
<body>

	<h1>CRUD Bas</h1>
	<h2>Toevoegen</h2>
	<form method="post">
		<label for="klantId">klantId:</label>
		<input type="text" id="klantId" name="klantId" placeholder="klantId" required/>
		<br>   
		<label for="klantNaam">klantNaam:</label>
		<input type="text" id="klantNaam" name="klantNaam" placeholder="klantNaam" required/>
		<br>
		<label for="klantAdres">klantAdres:</label>
		<input type="text" id="klantAdres" name="klantAdres" placeholder="klantAdres" required/>
		<br>
		<label for="klantPostcode">klantPostcode:</label>
		<input type="text" id="klantPostcode" name="klantPostcode" placeholder="klantPostcode" required/>
		<br>
		<label for="klantWoonplaats">klantWoonplaats:</label>
		<input type="text" id="klantWoonplaats" name="klantWoonplaats" placeholder="klantWoonplaats" required/>
		<br>
		<label for="klantEmail">klantEmail:</label>
		<input type="text" id="klantEmail" name="klantEmail" placeholder="klantEmail" required/>
		<br><br>
		<input type='submit' name='insert' value='Toevoegen'>
	</form></br>

	<a href='index.php'>Terug</a>

</body>
</html>
