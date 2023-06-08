
<!DOCTYPE html>
<html>
<body>
<h1>CRUD Acteur</h1>
<h2>Wijzigen</h2>

<?php

    include_once 'classes/Klanten.php';
    $acteur = new Acteur;

    if(isset($_POST["update"]) && $_POST["update"] == "Wijzigen"){

        $acteur->updateActeur2($_POST['nr'], $_POST['voornaam'], $_POST['achternaam']);
        echo '<script>alert("Acteur is gewijzigd")</script>';
        
        // Toon weer het scherm
        //include "update_form.php";
    }

    if (isset($_GET['nr'])){
        $row = $acteur->getActeur($_GET['nr']);
    }
?>
	
<form method="post">
<input type='hidden' name='nr' value='<?php echo $row["NR"];?>'>
<input type='text' name='voornaam' required value="<?php echo $row["VOORNAAM"];?>"> *</br>
<input type='text' name='achternaam' required value='<?php echo $row["ACHTERNAAM"];?>'> *</br></br>
<input type='submit' name='update' value='Wijzigen'>
</form></br>

<a href='index.php'>Terug</a>

</body>
</html>



