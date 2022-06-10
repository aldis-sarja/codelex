<?php

function product(int $lower, int $upper): int
{
    $prod = 1;
    for ($num = $lower; $num <= $upper; $num++) {
        $prod *= $num;
    }
    return $prod;
}

echo "The product of 1 to 10 is " . product(1, 10);
