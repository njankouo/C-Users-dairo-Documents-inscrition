<?php
require_once 'chaine_connexion.php';
$requete=$pdo->prepare('select * from specialite');
$requete->execute();
$requete->setFetchMode(PDO::FETCH_OBJ);
$specialites=$requete->fetchAll();



?>
<!DOCTYPE html>
<html>
<head>
	<title>MON PROJET BTS</title>
	<link rel="stylesheet" type="text/css" href="premier.css">
</head>
<body>
<p>maquette du formulaire d'inscription</p><br><br>
<center><fieldset style="border:1px black;width:390px;height:540px; background-color:rgb(73,148,148);">
	
<h1>inscription en ligne</h1><br><br>
<h2>inscription d'un etudiant</h2><br>
<form  action="create.php" method="POST" name="form_ajouter" id="form_ajouter">
	<input type="text" name="nom" placeholder="entrez le nom..." class="input"><br>
	<input type="text" name="prenom" placeholder="entrez le prenom..." class="input"><br>
	<input type="text" name="date_naissance" placeholder="entrez la date..." class="input"><br>	
	<input type="text" name="lieu" placeholder="entrez le lieu de naissance..." class="input">	<br>
	<input type="text" name="email" placeholder="entrez votre adresse email..." class="input"><br>	
	<input type="tel" name="telephone" placeholder="entrez le numero de telephone..." maxlength="9"><br>
	<select name="code_specialite" placeholder="selectionner une specialite" id="code_specialite" class="input">
	<?php 
		foreach ($specialite as specialites) { ?>
			<option value="<?php echo $specialite->$code_specialite ?>">
			<?php echo $specialite->intitule  ?>

			</option>
		<?php } 

		 ?>
	</select>
	<button id="valider" name="valider">valider</button>
	</form>
</fieldset></center>
<script type="text/javascript" src="monscript.js"></script>
</body>
</html>