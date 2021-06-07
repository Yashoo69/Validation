<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>MENU</title>
</head>

<body>
    <?php include('./templates/header.php') ?>

    <main>
        <?php

        if (isset($_SESSION['identifiant'])) :
            $id = ($_SESSION['identifiant']);
            $id = strtoupper($id); ?>

            <img src="https://fontmeme.com/permalink/210607/d199b89a34cff4a133fef1ff1f16f2e4.png"  alt="Bienvenue"><h1><?= $id ?></h1>
        <?php else : ?>
            <img src="https://fontmeme.com/permalink/210607/d199b89a34cff4a133fef1ff1f16f2e4.png"  alt="Bienvenue">
        <?php endif ?>

    </main>
</body>
<?php include('./templates/footer.php') ?>
</html>