<?php

$sum = (int) readline("What is desired sum? : ");
if ($sum < 1 || $sum > 12) {
    die("Incorrect number!\nThis will lead to almost infinity loop!\n");
}

while(true) {
    $dice1 = random_int(1, 6);
    $dice2 = random_int(1, 6);
    echo "{$dice1} and {$dice2} = " . ($dice1 + $dice2) . PHP_EOL;
    if (($dice1 + $dice2) === $sum) {
        break;
    }
}
