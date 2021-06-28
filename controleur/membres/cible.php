<?php
// Vérification de la validité des informations
if(isset($_POST['password']) AND !empty($_POST['password'])) 
{
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$password = htmlspecialchars($_POST['password']);
	$password2 = htmlspecialchars($_POST['password2']);
	$signature = htmlspecialchars($_POST['signature']);
	$email = htmlspecialchars($_POST['email']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

	//if($password == $password2)
	//{
		// Hachage du mot de passe
		$pass_hache = sha1($password);
			
			if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
			{
				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=jilou2010_db1','root','');
				}
				catch(Exception $e)
				{
					die('Erreur : ' .$e->getMessage());
				}
				// Insertion
				$req = $bdd->prepare('INSERT INTO membres(pseudo, password, email, date_inscription, signature) VALUES(:pseudo, :pass, :email, CURDATE(), :signature)');
				$req->execute(array(
					'pseudo' => $pseudo,
					'pass' => $pass_hache,
					'email' => $email,
					'signature' => $signature))or die (print_r($req->errorInfo()));
			}
			header('Location:/site_futur/vue/membres/index.php');	
		
	//}
		

}
else
{
	header('Location: /site_futur/vue/membres/inscription.php');
}
?>