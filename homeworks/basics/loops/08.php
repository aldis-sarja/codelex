<?php

$min = (int) readline("Min: ");
$max = (int) readline("Max: ");

for ($start = $min; $start <= $max; $start++) {

    for ($num = $start; $num <= $max; $num++) {
        echo $num . ' ';
    }
    for ($num = $min; $num < $start; $num++) {
        echo $num . ' ';
    }
    echo PHP_EOL;
}
