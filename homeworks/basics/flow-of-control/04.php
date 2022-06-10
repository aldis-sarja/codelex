<?php

(count($argv) > 1) or die("Give me a number of weekday, starting from 0, please!\n");

$day = (int) $argv[1];

if ($day >= 0 && $day < 7) {
    if ($day === 0) {
        echo 'Sunday';
    } elseif ($day === 1) {
        echo 'Monday';
    } elseif ($day === 2) {
        echo 'Tuesday';
    } elseif ($day === 3) {
        echo 'Wednesday';
    } elseif ($day === 4) {
        echo 'Thursday';
    } elseif ($day === 5) {
        echo 'Friday';
    } else {
        echo 'Saturday';
    }
} else {
    echo "Not a valid day";
}
echo PHP_EOL;


switch ($day) {
    case 0:
        echo 'Sunday';
        break;
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';
        break;
    case 6:
        echo 'Saturday';
        break;
    default:
        echo "Not a valid day";
}
echo PHP_EOL;
