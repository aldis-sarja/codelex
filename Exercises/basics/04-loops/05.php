<?php

$person = new stdClass();
$person->name = 'Umberto';
$person->surname = 'Eco';
$person->age = 84;
$person->birthday = '05.01.1932';
$persons['Eco'] = $person;

$person = new stdClass();
$person->name = 'Kurt';
$person->surname = 'Vonnegut';
$person->age = 85;
$person->birthday = '11.11.1922';
$persons['Vonnegut'] = $person;

$person = new stdClass();
$person->name = 'Lion';
$person->surname = 'Feuchtwanger';
$person->age = 74;
$person->birthday = '07.07.1884';
$persons['Feuchtwanger'] = $person;

foreach ($persons as $person) {
    foreach ($person as $key => $value) {
        echo "{$key}: {$value}\n";
    }
    echo PHP_EOL;
}
