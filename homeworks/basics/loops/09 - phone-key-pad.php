<?php

$input = strtolower(trim(readline("Give me a word: ")));

$keypad = [
    2 => 'abc',
    3 => 'dec',
    4 => 'ghi',
    5 => 'jkl',
    6 => 'mno',
    7 => 'pqrs',
    8 => 'tuv',
    9 => 'wxyz'
];

$digits = '';

for ($i = 0; $i < strlen($input); $i++) {
    $char = substr($input, $i, 1);

    foreach ($keypad as $number => $code) {
        $pos = strpos($code, $char);
        if ($pos !== false) {
            $digits .= str_repeat("{$number}", ++$pos);
            break;
        }
    }
}

echo $digits . PHP_EOL;
