<?php
 
// remplacer nomdebase par le nom de votre base SQL
// remplacer password par votre mot de passe
 define ("ADMIN","root");
 define ("PASSWORD","");
 define("SERVEUR","localhost");
 define("DATABASE","jilou2010_db1");
$dsn = "mysql:dbname=".DATABASE.";host=".SERVER;
 
// Connexion au serveur
 
$bdd = new PDO($dsn,"ADMIN","PASSWORD");
 

 
?>