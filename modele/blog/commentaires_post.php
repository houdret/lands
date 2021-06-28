<?php
if ((isset($_POST['auteur']))and !empty($_POST['auteur']) and (isset($_POST['commentaire'])) and !empty($_POST['commentaire']))
    {
	$auteur = htmlspecialchars($_POST['auteur']);
	$commentaire = htmlspecialchars($_POST['commentaire']);
	$billet = $_POST['id_billet'];
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=jilou2010_db1','root','');
	}
	catch(Exception $e)
	{
		die('Erreur : ' .$e->getMessage());
	}
	$req = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(:id_billet, :auteur, :commentaire, NOW())');
		$req->execute(array(
				'id_billet' => $billet,
				'auteur' => $auteur,
				'commentaire' => $commentaire
				))or die (print_r($req->errorInfo()));
	header('Location: site_futur/blog.php');
}
else
{
	header('Location: site_futur/blog.php');
}
?>
