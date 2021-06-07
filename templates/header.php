<?php session_start() ?>

<header>
        <div class="icon">
        <img src="./images/kuzco.png" alt=""  width="55%"  srcset="">
        </div>
    <nav>
        <ul class="navbar">
            <li class="ltmenu"> <a href="index.php"> Accueil </a></li>
            <li role="separator" class="separator"></li>
            
            <?php if (isset($_SESSION['identifiant'])) :
                $maj = $_SESSION['identifiant'];
                $maj = ucfirst($maj); ?>
                <div class="dropdown">
                    <button onclick="drop()" class="dropbtn">Hi,<?= $maj ?></button>
                    <div id="myDropdown" class="dropdown-content">
                    <li class="ltmenu"> <a href="races.php"> Races</a></li>
                        <li class="ltmenu"> <a href="admin.php"> Filtres</a></li>
                        <a href="./controllers/logOut.php">Log Out</a>
                        </div>
                    </div>
            <?php else : ?>
                <li class="ltmenu"> <a href="login.php"> Se Connecter </a></li>
            <?php endif ?>

        </ul>
    </nav>

    <script>
   
        function drop() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

</header>