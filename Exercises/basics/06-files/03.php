<?php

require 'including.php';

$prompt = ":X:> ";
$ans = null;

echo "Welcom to Xacker calculator!\n";

while ($line = readline($prompt)) {
    $line = trim($line);
    if ($line === 'quit' || $line === 'exit' || $line === 'q' || $line === 'x') {
        break;
    }

    readline_add_history($line);
    if (strrchr($line, ';') !== ';') {
        $line .= ';';
    }

    $line = "\$ans = " . $line;

    eval($line);
    if (is_integer($ans)) {
        xackprint($ans);
    } else {
        echo $ans . PHP_EOL;
    }
}
