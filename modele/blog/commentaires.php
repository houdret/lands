<?php
if(!empty($_GET['billet']) && isset($_GET['billet']))
{
	try
	{
	$bdd = new PDO('mysql:host=localhost;dbname=jilou2010_db1','root','');
	}
	catch(Exception $e)
	{
	die('Erreur : ' .$e->getMessage());
	}
	$req = $bdd->prepare('SELECT id, titre, contenu, date_creation FROM billets WHERE id = ?');
	$req->execute(array($_GET['billet']));
	$donnees = $req->fetch();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Mon super blog</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="../../vue/site.css" rel="stylesheet" type="text/css" /> 
    </head>
        
    <body>
		<div id="bloc_page">
			<?php
				include "../../vue/header.php";
				include "../../vue/banniere.php";
			?>
			<h1>Mon super blog !</h1>
			<form action="commentaires_post.php" method="post">
			<p>
				Pseudo :<input type="text" name="auteur"  /><br/>
				Message:<textarea name="commentaire" rows="8" cols="45" >ICI ... </textarea><br/>
						<input type="hidden" name="id_billet" value="<?php echo $donnees['id'];?>"/>
				<input type="submit" value="Valider" />
			</p>
			</form>
			<p>
				<a href="/site_futur/blog.php" > Retour à la liste des billets </a>
			</p>
			
				<div class="news">
					<h3>
						<?php
						echo htmlspecialchars($donnees['titre']) . ' ' . $donnees['date_creation'] ;
						?>
					</h3>
					<p>
						<?php
						echo  nl2br(htmlspecialchars($donnees['contenu'])) ;					
						?>					
					</p>
				</div>			
				
			<br/>
			
			<h2>Commentaires</h2>
			
			<?php
			$req->CloseCursor();	
			$req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
			$req->execute(array($_GET['billet']));

			while ($donnees = $req->fetch())
			{
			?>
			<p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
			<p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
			<?php
				}
				$req->closeCursor();
			?>
			<?php
			
				include "../../vue/footer.php";
			?>
		   </div>
    </body>
</html>
<?php
}
else
{
	echo "Vous devez rentrez un numéro de billet ou un numéro existant!";
}
?>