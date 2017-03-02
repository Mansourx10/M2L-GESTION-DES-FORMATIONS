<?php
include("../data_base/data_base.php");

function LoginConnexion($login, $mot_de_passe){
	$bdd = new Base();
	$bdd = $bdd->connexion();

	$req = $bdd->prepare('SELECT pseudo, mot_de_passe FROM admin WHERE pseudo = ? AND mot_de_passe = ?');
	$req->execute(array( $login, $mot_de_passe
		));
	$resultat = $req->fetch();
	return $resultat;
}