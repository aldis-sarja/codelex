<?php

function xackprint(int $num): void
{
    printf("D: %20d H: %016x B: %064b O: %022o\n", $num, $num, $num, $num);
}
