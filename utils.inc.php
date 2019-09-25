<?php
function start_page($title){
    echo ' <!DOCTOTYPE html><html 
            lang="fr"><head><title>'.PHP_EOL.$title.'</title></head><body>'.PHP_EOL;

    echo '<hr><strong>'.$title.'</strong></hr>';
};

function end_page(){
    echo '</body><footer>pied de page</footer></html>';
};
?>