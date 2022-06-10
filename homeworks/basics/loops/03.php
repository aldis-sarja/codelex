<?php

$word1 = readline("Enter first word: ");
$word2 = readline("Enter second word: ");

$length = 30 - (strlen($word1) + strlen($word2));

echo $word1;
for ($count = 1; $count <= $length; $count++) {
    echo '.';
}
echo $word2;
