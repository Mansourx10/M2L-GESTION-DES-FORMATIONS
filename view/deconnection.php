<?php 
session_start();

destroy_session();
$_SESSION[''] = []; 

header('location: connexion.php');