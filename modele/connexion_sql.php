<?php

// Connexion � la base de donn�es
try
{
    $bdd = new PDO('mysql:localhost;dbname=jilou2010_db1','root','');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
