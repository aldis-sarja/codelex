<?php

$lower = 1;
$upper = 100;

function sumRange(int $lower, int $upper): int
{
    $sum = 0;
    for ($num = $lower; $num <= $upper; $num++) {
        $sum += $num;
    }
    return $sum;
}

function average(int $lower, int $upper): float
{
    return sumRange($lower, $upper)/($upper - $lower + 1);
}

echo "The sum of {$lower} to {$upper} is " . sumRange($lower, $upper);
echo PHP_EOL;
echo "The average is " . average($lower, $upper);
