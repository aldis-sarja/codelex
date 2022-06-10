<?php

$number = 100;

switch (true) {
    case $number < 50:
        echo 'Low';
        break;
    case $number >= 50 && $number <= 100:
        echo 'Medium';
        break;
    default:
        echo 'High';
}
