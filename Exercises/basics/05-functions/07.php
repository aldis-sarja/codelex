<?php

$person = new stdClass();
$person->name = 'Me';
$person->licenses = ['A', 'B'];
$person->cash = 10000;

$gun = new stdClass();
$gun->name = 'Watergun';
$gun->license = 'A';
$gun->price = 10;
$guns[] = $gun;

$gun = new stdClass();
$gun->name = 'Glock';
$gun->license = 'B';
$gun->price = 256;
$guns[] = $gun;

$gun = new stdClass();
$gun->name = 'Eagle';
$gun->license = 'B';
$gun->price = 1024;
$guns[] = $gun;

$gun = new stdClass();
$gun->name = 'M16';
$gun->license = 'C';
$gun->price = 2048;
$guns[] = $gun;

function canBuy($person, $guns): bool
{
    foreach ($guns as $gun) {
        if ($gun->price <= $person->cash && in_array($gun->license, $person->licenses))
            return true;
    }
    return false;
}

if (canBuy($person, $guns)) {
    echo "You can buy some gun\n";
} else {
    echo "You can't buy.\n";
}

function canBuyGun($person, $gun): bool
{
    if ($gun->price <= $person->cash && in_array($gun->license, $person->licenses))
        return true;

    return false;
}

$models = [];
$list = '';

foreach ($guns as $gun) {
    if (canBuyGun($person, $gun)) {
        $models[] = $gun->name;
    }
}

if (count($models) < 1) {
    $list = "nothing!";
} elseif (count($models) === 1) {
    $list = $models[0];
} elseif (count($models) > 1) {
    $list = $models[0];
    $i = 1;
    for (; $i < count($models)-1; $i++) {
        $list .= ', ' . $models[$i];
    }
    $list .= ' or ' . $models[$i];
}

echo "You can buy " . $list;

/*
$msg = "You can by";
$models = " nothing!";

foreach ($guns as $gun) {
    if ( canBuyGun($person, $gun)) {
        if ($models === ' nothing!')
            $models = ' ' . $gun->name;
        else
            $models .= ', ' . $gun->name;
    }
}
$idx = strrpos($models, ',');
if ($idx) {
    $models = substr_replace($models, ' ', $idx, 1);
    $models = substr_replace($models, 'and', $idx + 1, 0);
}
*/
