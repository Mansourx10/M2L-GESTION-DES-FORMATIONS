<?php
class Base {
    private $bdd;
    
    public function connexion(){
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));    
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        
        return $bdd;
    }
}