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
			<h3>Formulaire d'inscription</h3>
			
			<form action="/site_futur/controleur/membres/cible.php" method="post">
			<table>
				<tr>
					<td><label for="pseudo">Pseudo :</label></td><td><input type="text" name="pseudo" id="pseudo" required /></td>
				</tr>
				<tr>
					<td><label for="pass">Mot de passe :</label></td><td><input type="password" name="password" id="pass" required /></td>
				</tr>
				<tr>
					<td><label for="pass2">Retaper votre mot de passe :</label></td><td><input type="password" name="password2" id="pass2" required /></td>
				</tr>
				<tr>
					<td><label for="email">Adresse email :</label> </td><td class="email"><input type="email" name="email" id="email" /></td>
				</tr>
				<tr>
					<td><label for="signature">Signature :</label> </td><td><input type="text" name="signature" id="signature" /></td>
				</tr>
				<tr>
					<td><input type="submit" value="Valider" /></td><td> <input type="reset" value="Annuler" /></td>
				</tr>
			</table>
			</form>
			<?php		
				include "../../vue/footer.php";
			?>
		</div>
   </body>
</html>