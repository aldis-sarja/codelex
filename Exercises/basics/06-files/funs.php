<?php

function fib(int $num): float
{
    if ($num < 3)
        return 1;

    return fib($num-2) + fib($num-1);
}

function factorial(int $num): float
{
    if ($num === 1)
        return 1;

    return $num * factorial($num-1);
}
