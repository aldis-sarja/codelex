<?php

$times = (int) readline("Enter number: ");

for ($counter = 1; $counter <= $times; $counter++) {
    if ($counter % 15 === 0) {
        echo "FizzBuzz ";
    } elseif ($counter % 3 === 0) {
        echo "Fizz ";
    } elseif ($counter % 5 === 0) {
        echo "Buzz ";
    } else {
        echo $counter . " ";
    }
    if ($counter % 20 === 0) {
        echo PHP_EOL;
    }
}
