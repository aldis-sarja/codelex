<?php

$num = (int) readline("Enter the number: ");

//todo print if number is positive or negative

$sign = 'zero';
if ($num > 0) {
    $sign = "positive";
} elseif ($num < 0) {
    $sign = "negative";
}

echo "It's {$sign}";
