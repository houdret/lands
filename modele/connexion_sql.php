<?php

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:localhost;dbname=jilou2010_db1','root','');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
