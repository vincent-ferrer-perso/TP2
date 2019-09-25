<?php

    $id       = $_POST['id'      ];
    $civilite = $_POST['civilite'];
    $mail     = $_POST['e-mail'  ];
    $mdp      = $_POST['mdp'     ];
    $mdpV     = $_POST['mdpV'    ];
    $pays     = $_POST['pays'    ];
    $action   = $_POST['action'  ];

    if($action=='mailer'){
        echo 'Voici vos identifiants d\'inscription: '.$id.PHP_EOL;
        echo 'Email: '.$mail.PHP_EOL;
        echo 'Mot de passe: '.$mdp.PHP_EOL;
    }else{
        echo'<br/><strong>Bouton non géré!</strong><br/>';
    }