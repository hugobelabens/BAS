
<html>
<body>
<h1>Dropdown Acteur</h1>

<?php
include "Klanten.php";

// Maak een object Acteur
$acteur = new Acteur;
 
?>

<form method='post'>
	<?php
		isset($_POST['kies-btn']) ? $nr=$_POST['acteurnr'] : $nr=-1;
		$acteur->dropDownActeur($nr);
	?>
	<br>
	<input type='submit' name='kies-btn' value='Kies'></input>
</form>	

<?php

if (isset($_POST['kies-btn'])){
	$acteur->nr = $_POST['acteurnr'];
	$row = $acteur->getActeur();
	
	echo "Gekozen waarde: nr: $_POST[acteurnr] $row[VOORNAAM] $row[ACHTERNAAM]"; 
}
?>

</body>
</html>

