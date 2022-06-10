<?php

function verifyAge($person): bool
{
    return $person->age >= 18;
}

$persons = [];

$person = new stdClass();
$person->name = 'Ernest';
$person->surname = 'Hemingway';
$person->age = 61;
$person->birthday = '21.07.1899';
$persons[] = $person;

$person = new stdClass();
$person->name = 'Umberto';
$person->surname = 'Eco';
$person->age = 84;
$person->birthday = '05.01.1932';
$persons[] = $person;

$person = new stdClass();
$person->name = 'Kurt';
$person->surname = 'Vonnegut';
$person->age = 85;
$person->birthday = '11.11.1922';
$persons[] = $person;

$person = new stdClass();
$person->name = 'Lion';
$person->surname = 'Feuchtwanger';
$person->age = 74;
$person->birthday = '07.07.1884';
$persons[] = $person;

$person = new stdClass();
$person->name = 'Kyle';
$person->surname = 'Reese';
$person->age = 17;
$person->birthday = '31.12.2004';
$persons[] = $person;

foreach ($persons as $person) {
    if (verifyAge($person)) {
        echo "{$person->name} {$person->surname} is old enough. Give him(her) a beer, damn it!";
    } else {
        echo "{$person->name} {$person->surname} is too young to drink.";
    }
    echo PHP_EOL;
}
