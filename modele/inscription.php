<?php
include('../data_base/data_base.php');

	function inscription($pseudo, $email, $password)
		{
			$bdd = new Base();
			$bdd = $bdd -> connexion();

			$req = $bdd->prepare('INSERT INTO membre (pseudo, pass, email, date_inscription) VALUES (:pseudo, :password, :email, NOW())');
			$req->execute(array(
				'pseudo' => $pseudo,
				'password' => $password,
				'email' => $email)
				);
		
		}

	function login($pseudo, $password)
		{
			$bdd = new Base();
			$bdd = $bdd -> connexion();

			$req = $bdd->prepare("SELECT pseudo, pass FROM membre WHERE pseudo=':pseudo' AND pass=':password'");
			$req->execute(array(
				'pseudo' => $pseudo,
				'password' => $password));
			$resultat =$req->fetch();
			return $resultat;
		}