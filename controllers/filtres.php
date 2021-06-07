<?php

session_start();

unset($_SESSION['alpaga']);
unset($_SESSION['guanaco']);
unset($_SESSION['vigogne']);
unset($_SESSION['lama']);


foreach($_POST as $key => $value) {

    $_SESSION[$key] = $value;
}

header('Location: ../races.php'); 