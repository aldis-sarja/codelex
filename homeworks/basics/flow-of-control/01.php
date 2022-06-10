<?php


$num1 = (int) readline("Input the 1st number: ");
$num2 = (int) readline("Input the 2nd number: ");
$num3 = (int) readline("Input the 3rd number: ");

//todo print the largest number
$max = ($num1 > $num2) ? $num1 : $num2;
$max = ($max > $num3) ? $max : $num3;

echo $max;
