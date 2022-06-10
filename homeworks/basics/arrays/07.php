<?php

/*
 * rock paper scissors lizard Spock
 *
                        0        1        2           3         4
*/
$rockPaperScissors = ['rock', 'paper', 'scissors', 'lizard', 'Spock'];

$fight = [
    'rock' => ['scissors', 'lizard'],
    'paper' => ['rock', 'Spock'],
    'scissors' => ['paper', 'lizard'],
    'lizard' => ['paper', 'Spock'],
    'Spock' => ['rock', 'scissors']
];

while(true) {
    $pcChoice = random_array($fight);
    $pcHand = $rockPaperScissors[$pcChoice];

    echo "==================\n";

    echo "What is your choice\n1 rock\n2 paper\n3 scissors\n4 lizard\n5 Spock\n";
    $line = trim(readline("Your choice: "));
    if ($line === 'quit') {
        echo "pussy! :)\n";
        break;
    }
    $choice = (int) $line;
    if ($choice > 4 || $choice < 1) {
        echo "Incorrect number. Try again!\n";
        continue;
    }

    $playersHand = $rockPaperScissors[--$choice];

    echo "You: {$playersHand}\n";
    echo "PC:  {$pcHand}\n";

    if ($choice === $pcChoice) {
        echo "Tie!\n";
        continue;
    }

    if (in_array($pcHand, $fight[$playersHand])) {
        echo "You win!\n";
    } else {
        echo "I win!\n";
    }
}
