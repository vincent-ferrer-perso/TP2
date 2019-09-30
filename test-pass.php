<?php
    include 'utils.inc.php';
    start_page('login');
    lienBD();


    $id  = $_POST['id'      ];
    $mdp = password_hash($_POST['mdp'],PASSWORD_BCRYPT);

        header('www.google.fr');

