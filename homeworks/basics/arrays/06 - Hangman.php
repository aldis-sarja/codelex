<?php

$words = [
    "epistemology",
    "daguerreotype",
    "haematology",
    "nitrocellulose",
    "osmosis",
    "oversimplification",
    "relinquishment",
    "demanufacture",
    "yardman"
];

$word = str_split($words[random_int(0, count($words)-1)]);
$guess = array_fill(0, count($word), '_');
$misses = [];
$count = count($word) + (int)(count($word)/4);

while (true) {
    mainView();

    if ($count < 0) {
        echo "You loose!\n";
        break;
    }

    $line = trim(readline("Guess: "));
    if ($line === 'quit') {
        echo "You are giving up?!\n";
        break;
    }
    $char = substr($line, 0, 1);

    if (!$char) {
        continue;
    }

    if (in_array($char, $guess) || in_array($char, $misses)) {
        continue;
    }

    if (!in_array($char, $word)) {
        $misses[] = $char;
    } else {
        openCharacters($char);
    }
    if (!in_array('_', $guess)) {
        mainView();
        echo "YOU GOT IT!\n";
        $line = readline("Play 'again' or 'quit'? ");
        if ($line === 'quit') {
            echo "Bye!\n";
            break;
        } else {
            restart();
        }
    }
    $count--;
}

function mainView(): void
{
    global $guess, $misses, $count;

    echo '-=-=-=-=-' . str_repeat("=-", count($guess) ) . PHP_EOL;
    echo "Word:	  " . implode(' ', $guess) . PHP_EOL;
    echo "Misses: " . implode('', $misses) . PHP_EOL;
    echo "You got {$count} gueses\n";
}

function openCharacters($char): void
{
    global $word, $guess;

    for ($i = 0; $i < count($word); $i++) {
        if ($char === $word[$i]) {
            $guess[$i] = $char;
        }
    }
}

function restart(): void
{
    global $words, $word, $guess, $misses, $count;

    $word = str_split($words[random_int(0, count($words)-1)]);
    $guess = array_fill(0, count($word), '_');
    $misses = [];
    $count = count($word) + (int)(count($word)/2);
}
