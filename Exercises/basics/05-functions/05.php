<?php

// Es saproti, ka šis ir tizls variants, bet man gribējās izprast, kā mēs varam iegūt key => var pārus.
$fruits = [
    ['pineapples' => 25],
    ['apples' => 10],
    ['bananas' => 20],
    ['avocados' => 5],
    ['oranges' => 15]
];

function isMore10kg($fruit): bool
{
    $weight = $fruit[key($fruit)];
    if ($weight > 10)
        return true;
    return false;
}

$shippingCosts = [];
foreach ($fruits as $fruit) {
    $weight = $fruit[key($fruit)];
    $shippingCosts[$weight] = isMore10kg($fruit) ? 1 : 2;
}

foreach ($fruits as $fruit) {
    $weight = $fruit[key($fruit)];
    $fr = key($fruit);
    echo "The shipping of {$weight}kg of {$fr} will cost {$shippingCosts[$weight]} EUR\n";
}
echo PHP_EOL;
/*
foreach ($fruits as $fruit) {
    $weight = $fruit[key($fruit)];
    $fr = key($fruit);
    $cost = isMore10kg($fruit) ? 1 : 2;
    echo "The shipping of {$weight}kg of {$fr} will cost {$cost}EUR\n";
}
*/
$fruits = [
    [
        'name' => 'pineapples',
        'weight' => 25
    ],
    [
        'name' => 'apples',
        'weight' => 10
    ],
    [
        'name' => 'bananas',
        'weight' => 20
    ],
    [
        'name' => 'avocados',
        'weight' => 5
    ],
    [
        'name' => 'oranges',
        'weight' => 15
    ]
];
