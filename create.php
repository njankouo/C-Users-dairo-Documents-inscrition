<?php
require_once 'chaine_connexion.php';
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date_naissance=$_POST['date_naissance'];
$lieu=$_POST['lieu'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$code_specialite=$_POST['code_specialite']
$matricule=IN- .rand(1, 1000) . '-' .date('Ys') .;
$date_inscription= date('d/m/Y');
$code_inscription=IS- .rand(1, 1000) . '-' .date('Ys') .;
$requete=$pdo->prepare('insert into etudiant set matricule=?,nom=?,prenom=?,date_naissance=?,lieu=?,telephone=?,email=?');
$donnees=array($matricule,
$nom,
$prenom,
$date_naissance,
$lieu,
$telephone,
$email

 );
$requete->execute($donnees);


//insertion de l'inscription
$requete=$pdo->prepare('insert into inscription set code_inscription=?,matricule=?,code_specialite=?,date_inscription=?');
$donnees=array($code_inscription,
$matricule,
$code_specialite,
$date_inscription,

 );
$requete->execute($donnees);

?>