<?php

function freeFall(int $t): float
{
    return .5 * -9.81 * $t*$t;
}

echo "Falling in 10 seconds: " . freeFall(10) . 'm';
