<?php

session_start();

include('./users.php');

foreach($users as $value) {
    
    if ($_POST['identifiant'] == $value['admin'] && md5($_POST['password']) == $value['password']) {
        $_SESSION['identifiant'] = $value['admin'];
        $_SESSION['alpaga'] = 'on';
        $_SESSION['guanaco'] = 'on';
        $_SESSION['vigogne'] = 'on';
        $_SESSION['lama'] = 'on';

    } 
}

if  (isset($_SESSION['identifiant'])) {
    header('Location: ../index.php');
}

else {
    
    header('location: ../login.php?error');  
}

?>


