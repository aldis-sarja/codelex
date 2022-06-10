<?php

count($argv) > 1 or die("Give me ID, please!");
$id = $argv[1];

$file = fopen('Persons.csv', 'r') or die("Error! Can't open file");

$str = null;

while (list($pid, $name, $surname, $age) = fgetcsv($file, 0, ';')) {
    if ($id === $pid) {
        $str = "Name: {$name}\nSurname: {$surname}\nAge: {$age}";
        break;
    }
}
fclose($file);

if ($str)
    echo $str;
else
    echo "Can't find that person!";
