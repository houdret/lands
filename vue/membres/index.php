<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
setcookie('pseudo', $_SESSION['pseudo'], time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('password', $_SESSION['password'], time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <title>Espace membres</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <head>
		
</head>        
		<link href="../../site.css" rel="stylesheet" type="text/css" /> 
    </head>
        
    <body>
		<div id="bloc_page">
			<?php
				include "../header.php";
				include "../banniere.php";
			?>
			<h1>Bienvenue aux membres</h1>
			
			<p>
			<?php
			if(!isset($_SESSION['pseudo']) AND empty($_SESSION['pseudo']))
			{
			?>
			<a href="inscription.php">Pour vous inscrire cliquer ici!</a> ou <a href="/site_futur/modele/membres/connexion.php"> Pour vous connecter cliquer ici!</a>
			<?php
			}
			else
			{
			?>
			<a href="/site_futur/modele/membres/deconnexion.php">Pour vous déconnecter cliquer ici!</a>
			</p>
			<p>Bonjour <?php echo $_SESSION['pseudo']; } ?></p>
			<?php
				include "../footer.php";
			?>				
		</div>
	</body>
</html>
