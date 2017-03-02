<?php
session_start();
include("../modele/connexion.php");


if(isset($_POST['login']) AND isset($_POST['mot_de_passe']))
{
	$Login = htmlspecialchars($_POST['login']);
	$Mot_de_passe = sha1($_POST['mot_de_passe']);

	if(!empty($Login) AND !empty($Mot_de_passe))
	{
		$donnee = LoginConnexion($Login, $Mot_de_passe);
		
		if($donnee['pseudo'] == $Login AND $donnee['mot_de_passe'] == $Mot_de_passe)
		{

			$_SESSION['pseudo'] = $donnee['pseudo'];
			$_SESSION['mot_de_passe'] = $donnee['mot_de_passe'];
			header('location: ../profil/profil.php');
		}else 
		{
				$_SESSION['erreur'] = 'Mauvaise Autentifiaction !;!';
				header('location: ../view/connexion.php');
		}
	}else
	{
		$_SESSION['erreur'] = 'Veuille remplir tout les champs';
		header('location: ../view/connexion.php');
	}
}
