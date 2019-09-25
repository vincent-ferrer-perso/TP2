<?php

    $id       = $_POST['id'      ];
    $civilite = $_POST['civilite'];
    $mail     = $_POST['e-mail'  ];
    $mdp      = $_POST['mdp'     ];
    $mdpV     = $_POST['mdpV'    ];
    $pays     = $_POST['pays'    ];
    $action   = $_POST['action'  ];

    password_hash($mdp,PASSWORD_BCRYPT);

    if($action=='mailer'){
        echo 'Voici vos identifiants d\'inscription: '.$id.'<br>'.PHP_EOL;
        echo 'Email: '.$mail.'<br>'.PHP_EOL;
        echo 'Mot de passe: '.$mdp.'<br>'.PHP_EOL;
    }else{
        echo'<br/><strong>Bouton non géré!</strong><br/>';
    }