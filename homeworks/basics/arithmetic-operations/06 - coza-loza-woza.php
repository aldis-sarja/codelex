<?php

for ($num = 1; $num <= 110; $num++) {
    if ( !($num % 15) )
        echo "CozaLoza ";
    elseif ( !($num % 3) )
        echo "Coza ";
    elseif ( !($num % 5) )
        echo "Loza ";
    elseif ( !($num % 7) )
        echo "Woza ";
    else
        echo $num . ' ';

    if ( !($num % 11))
        echo PHP_EOL;
}
