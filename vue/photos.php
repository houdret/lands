<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Effet parallaxe </title>
    <link type="text/css" rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="script/jquery.parallax-1.1.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#slide1').parallax("center", 0, 0.1, true);
        $('#slide2').parallax("center", 900, 0.1, true);
        $('#slide3').parallax("center", 2900, 0.1, true);
    })
    </script>
</head>

<body>
    <div id="slide1" style="background-position: center -219px;">
        <div class="slide_inside">
            <figure>
                <img alt="logo khadija" src="../images/logo_senegal.png">
            </figure>
        </div>
    </div>
    <div id="slide2" style="background-position: center -140px;">
        <div class="slide_inside">
            <h2>Petite histoire de mon voyage</h2>
            <p>Lorem Salu bissame ! Wie geht's les samis ? Hans apporte moi une Wurschtsalad avec un picon bitte, s'il
                te plaît.Voss ? Une Carola et du Melfor ? Yo dû, espèce de Knäckes, ch'ai dit un picon !</p>
            <p>Hopla vous savez que la mamsell Huguette, la miss Miss Dahlias du messti de Bischheim était au
                Christkindelsmärik en compagnie de Richard Schirmeck (celui qui a un blottkopf), le mari de Chulia
                Roberstau, qui lui trempait sa Nüdle dans sa Schneck ! Yo dû, Pfourtz ! Ch'espère qu'ils avaient du
                Kabinetpapier, Gal !</p>
            <p>Yoo ch'ai lu dans les DNA que le Racing a encore perdu contre Oberschaeffolsheim. Verdammi et moi
                ch'avais donc parié deux knacks et une flammekueche. Ah so ? T'inquiète, ch'ai ramené du schpeck, du
                chambon, un kuglopf et du schnaps dans mon rucksack. Allez, s'guelt ! Wotch a kofee avec ton
                bibalaekaess et ta wurscht ? Yeuh non che suis au réchime, je ne mange plus que des Grumbeere light et
                che fais de la chym avec Chulien. Tiens, un rottznoz sur le comptoir.</p>
            <p>Tu restes pour le lotto-owe ce soir, y'a baeckeoffe ? Yeuh non, merci vielmols mais che dois partir à la
                Coopé de Truchtersheim acheter des mänele et des rossbolla pour les gamins. Hopla tchao bissame !
                Consectetur adipiscing elit</p>
        </div>
    </div>
    <div id="slide3" style="background-position: center">
        <div class="slide_inside">
            <h2>Partenaires</h2>
            <ul>
                <li>
                    Page d'accueil du site
                    <a href="/site_futur/index.php">Mon futur site</a>
                    grace à l'aide
                    <a href="http://www.alsacreations.com" target="_blank">Alsacréations.com</a>
                    et
                    <a href="http://www.siteduzero.com" target="_blank">Site du Zéro</a>
                </li>
                <li>
                    Exemple de photos :
                    <a href="http://www.flickr.com/photos/legofenris/" target="_blank">leg0fenris</a>
                </li>
                <li>
                    Utilisation du script :
                    <a href="https://github.com/IanLunn/jQuery-Parallax" target="_blank">jQuery-Parallax</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>