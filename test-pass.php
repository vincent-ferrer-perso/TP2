<?php
    include 'utils.inc.php';
    start_page('login');
    lienBD();


    $id  = $_POST['id'];
    $mdp = password_hash($_POST['mdp'],PASSWORD_BCRYPT);

    if(!('SELECT NomUtilisateur FROM user WHERE NomUtilisateur = \''.$id.'\'')) {
        header('Location: https://www.google.fr');
    }

