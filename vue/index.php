<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="site.css" />
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if lte IE 7]>
        <link rel="stylesheet" href="style_ie.css" />
        <![endif]-->

        <title>Jilou - Carnets de voyage</title>
       <script text="text/javascript">
			function combat()
			{
				window.open("/test/PDO/combat_v2.php");
			}
		</script>
    </head>

    <body>
        <div id="bloc_page">
        <?php
        include "header.php";
		include "banniere.php";
        ?>    
                
            <section>
                <article>
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Je suis un grand voyageur</h1>
                    <p>Mon premier voyage fut pour la venue au monde lol!</p>
					<p>Des vacances organisées avec la mutuel à chamonix en France </p>
                    <p>Après mon service militaire qui lui fut passé en Allemagne</p>
                    <p>Pour ma première année de mariage avec ma première femme à lloret del mar en Espagne</p>
					<p>Ensuite cause de séparation et sans charge j'ai assez voyagé dans différent pays les îles Espagnoles Ibisa, Majorca, Ténérife, j'ai aussi voulu joué au bronzés à Djerba la douce dans les cases</p>
					<P>Puis en bonne compagnies à Corfou en Grèce, en Turquie</p>
					<p>Suite à des différents suis allez au Cameroun pour trouver l'âme soeur, mais pas de chance c'était plutôt pour les papier qu'elle était intéressée, donc je suis retourné vivre pendant 5 ans à Ténérife</p>
					<p>Puis l'année d'après fut au Sénégal et j'en ai que de bon souvenir!</p>
					<p>Après j'ai été vivre pendant 5 ans à Ténérife</p>
					<p>De retour en Belgique je suis partie à Sousse en bonne compagnie et en Crête également en très bonne compagnie</p>
                </article>
                <aside>
                    <h1>À propos de l'auteur</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor"><button onClick="combat()"><img src="images/jilou.jpg" alt="Photo de Moi" /></button></p>
                    <p>Laisse-moi le temps de me présenter : je m'appelle Jean - louis pour les amis Jilou, je suis né un 14 novembre 1965.</p>
                    <p>Bien maigre, n'est-ce pas ? C'est pourquoi, aujourd'hui, j'ai décidé d'écrire ma biographie (ou zBiographie, comme vous voulez !) afin que les zéros sachent qui je suis réellement.</p>
                    <p><img src="images/facebook.png" alt="Facebook" /><img src="images/twitter.png" alt="Twitter" /><img src="images/vimeo.png" alt="Vimeo" /><img src="images/flickr.png" alt="Flickr" /><img src="images/rss.png" alt="RSS" /></p>
                </aside>
            </section>
            <?php
			include "footer.php";
			?>
            
        </div>
    </body>
</html>
