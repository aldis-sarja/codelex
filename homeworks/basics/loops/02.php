<?php

echo "Input number of terms: ";

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
$num = (int) readline("number: ");
$exp = (int) readline("exponent: ");

$result = $num;

for ($count = 1; $count <= $exp; $count++) {
    $result *= $num;
}
echo "number {$num} raised by {$exp} is - {$result}\n";
