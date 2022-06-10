<?php

$arr = [1, 13, 42, 3.14, "Hello"];

function doubling($num): int
{
    return $num * 2;
}

for ($i = 0; $i < count($arr); $i++) {
    if (is_integer($arr[$i]))
        echo doubling($arr[$i]) . PHP_EOL;
}
