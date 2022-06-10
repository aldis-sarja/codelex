<?php

$numbers = [];

for ($i = 0; $i < 10; $i++) {
    $numbers[] = random_int(1, 100);
}
/*
$numbers2 = [];
foreach ($numbers as $n) {
    $numbers2[] = $n;
}
*/

$numbers2 = $numbers;

$numbers[count($numbers)-1] = -7;

function display_array(array $arr)
{
    foreach ($arr as $item) {
        echo "$item ";
    }
}

echo "Array 1: " . implode(', ', $numbers) . PHP_EOL;
echo PHP_EOL;
echo "Array 2: " . implode(', ', $numbers2) . PHP_EOL;
