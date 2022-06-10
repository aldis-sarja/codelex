<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
$input = readline();
list($value) = sscanf($input, "%d");
echo (in_array($value, $numbers)) ? "Match found" : "Nothing!";

//todo check if an array contains a value user entered
