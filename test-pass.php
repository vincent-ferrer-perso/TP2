<?php
    $dbLink=mysqli_connect('mysql-vincentferrer.alwaysdata.net',173776,'Vf36@13300')
    or die('Erreur de connexion au serveur: ' .mysqli_connect_error());


    mysqli_select_db($dbLink,'vincentferrer_tp_php')
    or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));


    $Login  = $_POST['Login'];
    $mdp = password_hash($_POST['mdp'],PASSWORD_BCRYPT);

    $query = 'SELECT NomUtilisateur FROM user WHERE NomUtilisateur = \''.$Login.'\'';

    if(!($dbResult=mysqli_query($dbLink, $query))){
        echo'Erreur de requête<br/>';//Affiche le type d'erreur
        echo 'Requête: '.$query.'<br/>';
        echo 'Erreur: '.mysqli_error($dbLink).'<br/>';//Affiche la requête envoyée.
        exit();
    }


    while($dbRow=mysqli_fetch_assoc($dbResult)){
        if($Login == $dbRow['NomUtilisateur' ]) header('Location: logOK.php');
        else header('Location: erreur.php');

    }



