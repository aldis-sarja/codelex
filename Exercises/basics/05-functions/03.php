<?php

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 11;

function verifyAge($person): bool
{
    return $person->age >= 18;
}

if (verifyAge($person)) {
    echo "{$person->name} {$person->surname} has reached the age of 18. Give him(her) a beer, damn it!";
} else {
    echo "{$person->name} {$person->surname} is too young to drink.";
}
echo PHP_EOL;
