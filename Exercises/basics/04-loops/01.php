<?php

// Exercise 1

$arr = [];
for ($number = 0; $number <= 10; $number++) {
    $arr[] = $number;
}

foreach ($arr as $number) {
    echo $number . '  ';
}
echo PHP_EOL;
