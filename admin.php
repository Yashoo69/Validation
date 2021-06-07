<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/header.css">
    <title>Document</title>
</head>
<body>
<?php include('./templates/header.php') ?>
    <main>
    
    <?php if (isset($_SESSION['identifiant'])) : ?>
        <h1>Filtres</h1>
            <div class="checkbox">
                <form action="./controllers/filtres.php" id="lama" method="POST">
        
               <div><input type="checkbox" <?php if (isset($_SESSION['alpaga'])): ?> checked <?php endif ?> name="alpaga"><label for="alpaga">L'Alpaga </label></div> 
               <div><input type="checkbox" <?php if (isset($_SESSION['guanaco'])): ?> checked <?php endif ?>  name="guanaco"><label for="guanaco">Le Guanaco </label></div> 
               <div><input type="checkbox" <?php if (isset($_SESSION['vigogne'])): ?> checked <?php endif ?>  name="vigogne"><label for="vigogne">La Vigogne </label></div> 
               <div><input type="checkbox" <?php if (isset($_SESSION['lama'])): ?> checked <?php endif ?>  name="lama"><label for="lama">Le Lama </label></div> 
            
                <input type="submit">
        
                </form>
<?php else: ?>
    <?php require './templates/noAvailable.php'  ?>
    <?php endif ?>
    </div>

    </main>
</body>
<?php include './templates/footer.php' ?>
</html>