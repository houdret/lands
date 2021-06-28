<?php

if(!empty($_POST)){
	extract($_POST);
	$validate = true;
	if(empty($nom)){
		$validate = false;	
		$erreurnom = "Vous n'avez pas rempli le champs nom";
	}
	if(!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i",$email)){
		$validate = false;
		$erreuremail = "Vous avez rentré un email invalide";
	}
	if(empty($email)){	
		$validate = false;
		$erreuremail = "Vous n'avez pas rempli le champs email";
	}
	if(empty($message)){
		$validate = false;	
		$erreurmessage = "Vous n'avez pas rempli le champs message";
	}
	if($validate){
		$message=str_replace("\'","'",$message);
		$destinataire="jeanhoudret@gmail.com";
		$sujet="Formulaire de contact";
		$msg="Une nouvelle question est arrivée \n
		Nom : $nom \n
		Email : $email \n
		Message: $message";
		$entete="Form: $nom \n Reply-To: $email";
		$msg = stripslashes($msg);
		mail($destinataire,$sujet,$msg,$entete);
		$erreur = "L'email a bien été envoyé";
		unset($nom);
		unset($email);
		unset($message);
	}
	else{
		$erreur = "Une erreur survenue et votre email n'est pas parti";
	}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="site.css" />
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if lte IE 7]>
        <link rel="stylesheet" href="style_ie.css" />
        <![endif]-->

        <title>Formulaire contact</title>
		<style type="text/css">
			input[type=submit]{
				cursor:pointer;
			}
			textarea{
				width:100%;
				height:50px;
			}
			.error_message{
				color:#FF0000;
			}
			h1{
				font-family: Dayrom, serif;
			}
			.message{
				color:#0000FF;
			}
		</style>
	</head>
	<body>
		<div id="bloc_page">
        <?php
			include "header.php";
			include "banniere.php";
        ?>  
		<h1> Contactez nous </h1>
		<h2>N'hésitez pas à nous contacter</h2>
		<?php if(isset($erreur)){ echo "<p class='message'>".$erreur."</p>";}?>
		<form method="post" action="contact.php">
		<table>
			<tr>
			<td><label for="nom"> Nom :</label></td><td><input type="text" name="nom" id="nom" value="<?php if(isset($nom)) echo $nom; ?>" required/></td><td>
			<span class="error_message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span></td></tr>
			<tr>
			<td><label for="email"> Email :</label></td><td><input type="text" name="email" id="email" value="<?php if(isset($email)) echo $email; ?>" required/></td><td>
			<span class="error_message"><?php if(isset($erreuremail)) echo $erreuremail; ?></span></td></tr>
			<tr>
			<td><label for="message" > Message :</label></td><td><textarea name="message" id="message" required><?php if(isset($message)) echo $message; ?></textarea></td><td>
			<span class="error_message"><?php if(isset($erreurmessage)) echo $erreurmessage; ?></span></td>
			</tr>
		</table>
			<input type="submit" value="Envoyer"/>		
		</form>
		<?php
			include "footer.php";
		?>
            
        </div>
	</body>
</html>
