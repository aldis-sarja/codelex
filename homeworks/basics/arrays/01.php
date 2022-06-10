<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: " . implode(', ', array_unique($numbers));


//todo
natsort($numbers);
echo "Sorted numeric array: " . implode(', ', $numbers);

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: " . implode(', ', array_unique($words));

//todo
sort($words);
echo "Sorted string array: " . implode(', ', $words);
