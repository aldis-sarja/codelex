<?php

if (count($argv) < 2)
    die("Give me a number, please!");

sscanf($argv[1], "%d", $num) or die("Not a number!");

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

$msg = isEven($num) ? "Even Number" : "Odd Number";
echo $msg . PHP_EOL;
echo "bye!";
