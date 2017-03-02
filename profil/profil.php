<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title> Profil Administrateur </title>
</head>
<body>
<center>
<?php
    echo $_SESSION['pseudo'];
    echo $_SESSION['mot_de_passe'];
?>
</center>
<p align="rignt"><a href="../view/connexion.php">Deconnexion</a></p>
</body>
</html>