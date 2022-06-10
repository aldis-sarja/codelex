<?php

count($argv) > 1 or die("Give me a file name, please!");

$file = fopen($argv[1], 'r') or die("Error! Can't open file");
$line = trim(fgets($file));
fclose($file);

$person = new stdClass();

list($person->name, $person->surname, $person->age) = sscanf($line,"%[^,], %[^,], %d");

echo "Name: {$person->name}\nSurname: {$person->surname}\nAge: {$person->age}";

/*
list($name, $surname, $age) = sscanf($line,"%s %s %d");
$name = rtrim($name, ",");
$surname = rtrim($surname, ",");

$person->name = $name;
$person->surname = $surname;
$person->age = $age;
*/

/* ar explode()
list($person->name, $person->surname, $age)= explode(", ", $line);
list($person->age) = sscanf($age, "%d");
*/

/*
$line = str_replace(',', '', $line);
list($person->name, $person->surname, $person->age) = sscanf($line,"%s %s %d");
*/

