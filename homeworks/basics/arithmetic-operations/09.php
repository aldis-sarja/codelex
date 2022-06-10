<?php

function calculateBMI(float $height, float $weight): float
{
    $pounds = $weight * 2.20462262185;
    $inches = $height / 2.54;

    return $pounds * 703 / ($inches * $inches);
}

if (count($argv) < 3)
    die("give me your height (in cm)  and weight (in kg)");

sscanf($argv[1], "%f", $height) or die("Not a number!");
sscanf($argv[2], "%f", $weight) or die("Not a number!");

$bmi = number_format(calculateBMI($height, $weight), 2);

if ($bmi > 25)
    echo "You are overweight! Your body mass index is {$bmi}";
elseif ($bmi < 18.5)
    echo "You are underweight! Your body mass index is {$bmi}";
else
    echo "Your body mass index is OK! It's {$bmi}";
