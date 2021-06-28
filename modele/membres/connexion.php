<?php
if(isset($_POST['password']) AND isset($_POST['pseudo']))
{
	// Hachage du mot de passe
	$pass_hache = sha1($_POST['password']);
	$pseudo = $_POST['pseudo'];
	// Vérification des identifiants
	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=jilou2010_db1','root','');
	}
	catch(Exception $e)
	{
		die('Erreur : ' .$e->getMessage());
	}
	$req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND password = :pass');
	$req->execute(array(
		'pseudo' => $pseudo,
		'pass' => $pass_hache));

	$resultat = $req->fetch();

	if (!$resultat)
	{
		echo 'Mauvais identifiant ou mot de passe !';
	}
	else
	{
		session_start();
		$_SESSION['id'] = $resultat['id'];
		$_SESSION['pseudo'] = $pseudo;		
		$_SESSION['password'] = $pass_hache;
		echo 'Vous êtes connecté !';		
		
		header('Location:/site_futur/vue/membres/index.php');
	}
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
	   <title>Inscription au site</title>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	   <link href="../../vue/site.css" rel="stylesheet" type="text/css" /> 
    </head>
        
    <body>
		<div id="bloc_page">
			<?php
				include "../../vue/header.php";
				include "../../vue/banniere.php";
			?>
			<h3>Formulaire de connexion</h3>
			
			<form  method="post">
			<table>
				<tr>
					<td><label for="pseudo">Pseudo :</label></td><td><input type="text" name="pseudo" id="pseudo" required /></td>
				</tr>
				<tr>
					<td><label for="pass">Mot de passe :</label></td><td><input type="password" name="password" id="pass" required /></td>
				</tr>
				</table>
				Connexion automatique <input type="checkbox" name="auto" /></br>
				
				<input type="submit" value="Se connecter" />
			
			</form>
			<?php		
				include "../../vue/footer.php";
			?>
		</div>
   </body>
</html>
<?php
}
?>