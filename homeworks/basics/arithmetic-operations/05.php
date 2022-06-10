<?php

$guess = 0;
$num = rand(1, 100);

echo "I'm thinking of a number between 1-100.  Try to guess it.\n";
/*
while ($line = readline("number: ")) {
    if (sscanf($line, "%d", $guess)) {
        break;
    } else {
        echo "Give me number, please...\n";
    }
}

if ($guess == $num) {
    echo "You guessed it!  What are the odds?!?";
} elseif ($guess > $num) {
    echo "Sorry, you are too high.  I was thinking of {$num}";
} else {
    echo "Sorry, you are too low.  I was thinking of {$num}";
}*/

$c = 0;
for (; $c < 3; $c++) {
    $guess = (int) readline("number: ");

    if ($guess === $num) {
        echo "You guessed it!  What are the odds?!?\n";
        break;
    }
    if ($guess > $num) {
        echo "Sorry, you are too high.\n";
    } else {
        echo "Sorry, you are too low.\n";
    }
}

if ($c === 3)
    echo "I was thinking of {$num}";

/*
while (FALSE !== ($line = fgets(STDIN))) {
*/

/*
$f = fopen( 'php://stdin', 'r' );

while( $line = fgets( $f ) ) {
    echo $line;
}

fclose( $f );
*/
