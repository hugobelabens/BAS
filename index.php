<html>
<!--
	Auteur: R. Wigmans
	Function: home page CRUD Acteur
-->

<body>
	<h1>CRUD Bas</h1>
	<nav>
		<a href='insert_Klant.php'>Toevoegen nieuwe acteur</a>
	</nav>
	
<?php

// De classe definitie
include_once "classes/Klanten.php";
//$conn = dbConnect();

// Maak een object Acteur
$acteur = new Acteur;

// Haal alle acteurs op uit de database mbv de method getActeurs()
$lijst = $acteur->getActeurs();

// Print een HTML tabel van de lijst	
$acteur->showTable($lijst);
?>
</body>
</html>