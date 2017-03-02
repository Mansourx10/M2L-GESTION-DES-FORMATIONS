<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Connexion Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Connexion Administrateur</h2>
  <form method="post"  action="../controleur/controle_connexion.php">
    <div class="form-group">
      <label for="login">login:</label>
      <input type="text" name="login" class="form-control" id="login" placeholder="Entre votre login">
    </div>
    <div class="form-group">
      <label for="pwd">Mot de passe:</label>
      <input type="password" name="mot_de_passe" class="form-control" id="pwd" placeholder="Entre votre mmot de passe">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Se souvenir de moi </label>
    </div>
    <button type="submit" class="btn btn-default">Envoyer</button>

  </form>
 <?php
	if(isset($_SESSION['erreur']) AND !empty($_SESSION['erreur'])){
		echo $_SESSION['erreur'];
	}
?>
</div>
</body>
</html>
