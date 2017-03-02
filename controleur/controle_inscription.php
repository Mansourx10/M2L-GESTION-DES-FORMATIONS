<?php
session_start();
include('../modele/inscription.php');

if(isset($_POST['pseudo']) AND isset($_POST['mot_de_passe']) AND isset($_POST['confirm_mot_de_passe']) AND isset($_POST['email']))
{
$pseudo = $_POST['pseudo'];
$password = $_POST['mot_de_passe'];
$confirm_password = $_POST['confirm_mot_de_passe'];
$email = $_POST['email'];

	if(!empty($pseudo) AND !empty($password) AND !empty($confirm_password) AND !empty($email))
	{
		if($password == $confirm_password)
			{
				$passwordAch = sha1($password);
				inscription($pseudo, $email, $passwordAch);
				$_SESSION['msg'] = 'Votre inscritption à été bien pris en compte';
				
			}else 
			{
				$_SESSION['msg'] = "Le mot de passe est différent"; 
			}
	}else 
	{
		$_SESSION['msg']="Veuiller remplir tous les champs";
	}
}

header('location: ../view/inscription.php');
