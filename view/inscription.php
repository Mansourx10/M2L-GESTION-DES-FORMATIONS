<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container">
<h2>Vertical (basic) form</h2>
  <form method="post" action="../controleur/controle_inscription.php">
   
    <div class="form-group">
      <label for="Pseudo">Pseudo:</label>
      <input type="text" name="pseudo" class="form-control" id="Pseudo" placeholder="Entre pseudo">
    </div>
    
    <div class="form-group">
      <label for="mot_de_passe">Mot de passe:</label>
      <input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe" placeholder="Entre le mot de passe">
    </div>
    
    <div class="form-group">
      <label for="confirm_mot_de_passe">Rettapez votre mot de passe:</label>
      <input type="confirm_password" name="confirm_mot_de_passe" class="form-control" id="confirm_mot_de_passe" placeholder="Enter password">
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    

    <button type="submit" class="btn btn-default">Envoyer</button>
  </form>
  <?php
    include('../partial/errors.php');

    if(isset($errmsg))
    {
      echo '<strong style="color:red; text-align:center;">'. $errmsg . '</strong>';
    }
  ?>
</div>

</body>
</html>