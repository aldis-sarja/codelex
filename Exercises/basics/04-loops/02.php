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


// Exercise 2

for ($i = 0; $i < count($arr) ; $i++) {
    echo $arr[$i] . '  ';
}
echo PHP_EOL;


// Exercise 3

for ($i = 1; $i < 10; $i++) {
    echo "codelex\n";
}


// Exercise 4

for ($i = 0; $i < count($arr); $i++) {
    if ( ($arr[$i] % 3) == 0 )
        echo $arr[$i] . '  ';
}
echo PHP_EOL;


// Exercise 5
$person = new stdClass();
$person->name = 'Umberto';
$person->surname = 'Eco';
$person->age = 84;
$person->birthday = '05.01.1932';
$persons['Eco'] = $person;

$person->name = 'Kurt';
$person->surname = 'Vonnegut';
$person->age = 85;
$person->birthday = '11.11.1922';
$persons['Vonnegut'] = $person;

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
