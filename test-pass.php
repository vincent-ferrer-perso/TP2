<?php
    $dbLink=mysqli_connect('mysql-vincentferrer.alwaysdata.net',173776,'Vf36@13300')
    or die('Erreur de connexion au serveur: ' .mysqli_connect_error());


    mysqli_select_db($dbLink,'vincentferrer_tp_php')
    or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));


    $id  = $_POST['id'];
    $mdp = password_hash($_POST['mdp'],PASSWORD_BCRYPT);

    $query = 'SELECT NomUtilisateur FROM user WHERE NomUtilisateur = \''.$id.'\'';
    
    if(!($dbResult=mysqli_query($dbLink, $query))) {
        echo 'marche pas';
    }

