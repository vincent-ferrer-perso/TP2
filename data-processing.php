<?php

    $id       = $_POST['id'      ];
    $civilite = $_POST['civilite'];
    $mail     = $_POST['e-mail'  ];
    $mdp      = $_POST['mdp'     ];
    $mdpV     = $_POST['mdpV'    ];
    $pays     = $_POST['pays'    ];
    $action   = $_POST['action'  ];

    $mdp = password_hash($mdp,PASSWORD_BCRYPT);

    $message = 'Voici vos identifiants d\'inscription: ' .$id.'<br>'.
                'Email:' .$mail.'<br>'.
                'Mot de passe: '.$mdp.'<br>'.
                'Pays: '.$pays.'<br>';


    if($action=='mailer'){
        mail('vincent.ferrer@etu.univ-amu.fr','TD2 Identifiants',$message);

    }else{
        echo'<br/><strong>Bouton non géré!</strong><br/>';
    }