<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/races.css">
    <title>Document</title>
</head>

<body>
    <?php include('./templates/header.php') ?>
    <main>

        <?php if (isset($_SESSION['alpaga'])) : ?> <div>

                <h1>L'Alpaga</h1>
                <div>
                    <p> L'Alpaga est une espèce de lama élevée à la base pour sa laine.
                        En effet, sa toison précieuse est très appréciée, même si sa viande est également importante pour la nutrition des habitants de l'Altiplano.
                        La couleur de sa robe est, comme celle du lama, très variable, mais l'Alpaga est moins docile que son cousin.
                        Néanmoins, cette espèce connaît un certain succès en tant qu'animal de loisir. </p>
                    <img src="./images/alpaga.jpg" alt="alpaga">
                </div>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['guanaco'])) : ?> <div>
                <h1>Le Guanaco</h1>
                <div>
                    <p> Plus grands que les vigognes, les guanacos sont également protégés, sans être autant exposés au danger.
                        Ils ont un physique assez similaire à celui du lama, malgré leur robe uniforme de couleur fauve-roux, au poitrail blanc et au masque gris.
                        Leur toison est relativement peu abondante, et contrairement au lama, ils sont plutôt agressifs ou craintifs devant l'homme.
                        Les guanacos sont cependant assez répandus dans les zoos européens et chez les particuliers.</p>
                    <img src="./images/guanaco.jpg" alt="guanaco">
                </div>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['vigogne'])) : ?> <div>
                <h1>La Vigogne</h1>
                <div>
                    <p> La vigogne est très peu domestiquée. Il s'agit du plus petit et du plus rare des petits camélidés.
                        De couleur assez claire, elle porte parfois une longue bavette blanche sous le cou.
                        Sa laine faisant parti des fibres animales les plus fines, elle était chassée jusque dans les années 60 pour sa toison.
                        Mais alors que l'espèce était en voie d'extermination, des mesures de protection ont été prises et depuis, la population a pu se reconstituer.
                        Aujourd'hui, des groupes de vigognes sauvages sont régulièrement attrapés, tondus, puis relâchés.</p>
                    <img src="./images/vigogne.jpg" alt="vigogne">
                </div>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['lama'])) : ?> <div>
                <h1>Le Lama</h1>
                <div>
                    <p> Il correspond à la forme la plus domestiquée des guanacos.
                        En effet, les lamas sont très proches de l'homme et fournissent laine, peau, et viande aux autochtones des hauts plateaux arides,
                        même s'ils ont une fonction principal d'animal de bât. Il existe une grande variété de robe
                        (blanc, gris, brun, noir, pie, moucheté), de taille, et de toison chez cette espèce.</p>
                    <img src="./images/lama.jpg" alt="lama">
                </div>
            </div>
        <?php endif ?>
    </main>
</body>
<?php include './templates/footer.php' ?>

</html>