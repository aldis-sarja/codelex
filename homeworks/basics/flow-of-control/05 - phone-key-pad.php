<?php

$input = strtolower(trim(readline("Give me a word: ")));
$digits = [];

for ($i = 0; $i < strlen($input); $i++) {
    $char = ord(substr($input, $i, 1));

    if ($char >= 97 && $char <= 99) {
        $digits[] = 2;
        if ($char > 97) {
            $digits[] = 2;
        }
        if ($char === 99) {
            $digits[] = 2;
        }
    } elseif ($char >= 100 && $char <= 102) {
        $digits[] = 3;
        if ($char > 100) {
            $digits[] = 3;
        }
        if ($char === 102) {
            $digits[] = 3;
        }
    } elseif ($char >= 103 && $char <= 105) {
        $digits[] = 4;
        if ($char > 103) {
            $digits[] = 4;
        }
        if ($char === 105) {
            $digits[] = 4;
        }
    } elseif ($char >= 106 && $char <= 108) {
        $digits[] = 5;
        if ($char > 106) {
            $digits[] = 5;
        }
        if ($char === 108) {
            $digits[] = 5;
        }
    } elseif ($char >= 109 && $char <= 111) {
        $digits[] = 6;
        if ($char > 109) {
            $digits[] = 6;
        }
        if ($char === 111) {
            $digits[] = 6;
        }
    } elseif ($char >= 112 && $char <= 115) {
        $digits[] = 7;
        if ($char > 112) {
            $digits[] = 7;
        }
        if ($char > 113) {
            $digits[] = 7;
        }
        if ($char === 115) {
            $digits[] = 7;
        }
    } elseif ($char >= 116 && $char <= 118) {
        $digits[] = 8;
        if ($char > 116) {
            $digits[] = 8;
        }
        if ($char === 118) {
            $digits[] = 8;
        }
    } else {
        $digits[] = 9;
        if ($char > 119) {
            $digits[] = 9;
        }
        if ($char > 120) {
            $digits[] = 9;
        }
        if ($char === 122) {
            $digits[] = 9;
        }
    }
}
echo implode('', $digits) . PHP_EOL;


$digits2 = '';

for ($i = 0; $i < strlen($input); $i++) {
    $char = substr($input, $i, 1);
    switch (true) {
        case ($pos = strpos('abc', $char)) !== false: // un tikai tāpēc, ka $pos = 0 gadījumā tas tiktu interpretēts kā false!
            $digits2 .= str_repeat('2', ++$pos);
            break;
        case ($pos = strpos('def', $char)) !== false:
            $digits2 .= str_repeat('3', ++$pos);
            break;
        case ($pos = strpos('ghi', $char)) !== false:
            $digits2 .= str_repeat('4', ++$pos);
            break;
        case ($pos = strpos('jkl', $char)) !== false:
            $digits2 .= str_repeat('5', ++$pos);
            break;
        case ($pos = strpos('mno', $char)) !== false:
            $digits2 .= str_repeat('6', ++$pos);
            break;
        case ($pos = strpos('pqrs', $char)) !== false:
            $digits2 .= str_repeat('7', ++$pos);
            break;
        case ($pos = strpos('tuv', $char)) !== false:
            $digits2 .= str_repeat('8', ++$pos);
            break;
        case ($pos = strpos('wxyz', $char)) !== false:
            $digits2 .= str_repeat('9', ++$pos);
    }
}
echo $digits2 . PHP_EOL;
