<?php

function calculateWage(float $pay, int $hours): float
{
    $overtime = $hours - 40;
    if ($overtime > 0)
        return $pay * 40 + $overtime * $pay * 1.5;

    return $pay * $hours;
}

function printWage($employee): string
{
    if ($employee['hours'] > 60) {
        return  "is trying to cheat!";
    }
    if ($employee['base_pay'] < 8.0) {
        return  "The base pay must not be less than the minimum wage";
    }
    return number_format(calculateWage($employee['base_pay'], $employee['hours']), 2) . '$';
}

$employees = [
    [
        'name' => 'Employee 1',
        'base_pay' => 7.50,
        'hours' => 35
    ],
    [
        'name' => 'Employee 2',
        'base_pay' => 8.20,
        'hours' => 47
    ],
    [
        'name' => 'Employee 3',
        'base_pay' => 10.00,
        'hours' => 73
    ]
];

foreach ($employees as $employee) {
    echo $employee['name'] . ': ' . printWage($employee) . PHP_EOL;
}
