<?php

(count($argv) > 1) or die("Give me a positive number, please!\nI demand for very positive number!\n");

$num = (int) $argv[1];

if ($num < 0) {
    echo "Not positive!\n";
    exit;
}

$digits = 0;

do {
    $num = (int) ($num/10);
    $digits++;
} while ($num > 0);

echo "The number {$argv[1]} have {$digits} digits\n";
