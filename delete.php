
<?php 

if(isset($_POST["verwijderen"])){
	include 'classes/Klanten.php';
	
	// Maak een object Acteur
	$acteur = new Acteur;
	
	// Delete Acteur op basis van NR
	$acteur->deleteActeur($_GET["nr"]);
	echo '<script>alert("Acteur verwijderd")</script>';
	echo "<script> location.replace('index.php'); </script>";
}
?>



