<?php

echo "Welcome to Piglet!\n";
$score = 0;

while(true) {
    $dice = random_int(1, 6);
    echo "You rolled a {$dice}!\n";
    if ($dice === 1) {
        $score = 0;
        break;
    }
    $score += $dice;
    $input = trim(readline("Roll again? (y/n): "));
    if ($input === 'n') {
        break;
    }
}
echo "You got {$score} points.\n";
