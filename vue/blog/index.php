<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <title>Mon blog</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="vue/site.css" rel="stylesheet" type="text/css" /> 
    
    </head>
        
    <body>
		<div id="bloc_page">
			<?php
				include "vue/header.php";
				include "vue/banniere.php";
				
			?>
			<h1>Mon super blog !</h1>
			<p>Derniers billets du blog :</p>
	 
			<?php
			
			
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=jilou2010_db1','root','');
			}
			catch(Exception $e)
			{
				die('Erreur : ' .$e->getMessage());
			}
			$reponse = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0,5');
			
			while ($donnees = $reponse->fetch())
			{
			?>
			<div class="news">
				<h3>
					<?php
					echo htmlspecialchars($donnees['titre']) . ' ' . $donnees['date_creation_fr'] ;
					?>
				</h3>
				<p>
					<?php
					echo  nl2br(htmlspecialchars($donnees['contenu'])) ;
					?>
					<a href="modele/blog/commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a>';
				</p>
			</div>
			<?php
			}
			$reponse->closeCursor();
		
				include "vue/footer.php";
			?>
		</div>	
		
	</body>
</html>
