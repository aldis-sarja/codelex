<?php

$base = 32;

for ($level = 0; $level < 5; $level++) {
    $half = (int) (($base - $level*8)/2);
    for($i = 1; $i <= $half; $i++) {
        echo '/';
    }
    for ($i = 1; $i <= $level * 8; $i++) {
        echo '*';
    }

    for($i = 1; $i <= $half; $i++) {
        echo '\\';
    }
    echo PHP_EOL;
}

const HEIGHT = 7;

$base = (HEIGHT - 1) * 8;

for ($level = 0; $level < HEIGHT; $level++) {
    $half = (int) (($base - $level*8)/2);
    for($i = 1; $i <= $half; $i++) {
        echo '/';
    }
    for ($i = 1; $i <= $level * 8; $i++) {
        echo '*';
    }

    for($i = 1; $i <= $half; $i++) {
        echo '\\';
    }
    echo PHP_EOL;
}
