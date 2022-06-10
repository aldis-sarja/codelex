<?php

if (count($argv) < 3)
    die("Give me two numbers, please!");

function verifyNumbers(int $num1, int $num2): bool
{
    if ($num1 == 15 || $num2 === 15
        || ($num1 + $num2) === 15
        || ($num1 - $num2) === 15
        || ($num2 - $num1) === 15 )
            return true;

    return false;
}
sscanf($argv[1], "%d", $num1) or die("Not a number!");
sscanf($argv[2], "%d", $num2) or die("Not a number!");
//echo $num1 . ', ' . $num2 . PHP_EOL;

if ( verifyNumbers($num1, $num2))
    echo "True";
else
    echo "False";
