<?php

$board = [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' ']
];

$player1 = 'X';
$player2 = 'O';
$turn = $player1;
$turnsCount = 0;

displayBoard();

$prompt = "'{$turn}', choose your location (row, column): ";
while (true) {
    $line = trim(readline($prompt));
    if ($line === 'quit') {
        echo "pussy! :)\n";
        break;
    }
    list($y, $x) = sscanf($line, "%d %d");

    if (!checkCoordinates($x, $y)) {
        echo "Give correct pair of numbers for row and column (1 - 3), please!\n";
        continue;
    }

    if (!placeMark(--$x, --$y)) {
        echo "This field is already occupied!\n";
        continue;
    }

    displayBoard();

    if (checkWinner($x, $y)) {
        echo "Congratulations! '{$turn}' won!\n";
        break;
    }

    $turn = ($turn === $player1) ? $player2 : $player1;
    $turnsCount++;
    if ($turnsCount === 9) {
        echo "The game is a tie.\n";
        break;
    }

    $prompt = "'{$turn}', choose your location (row, column): ";
}


function displayBoard(): void
{
    global $board;

    for ($y = 0; $y < 3; $y++) {
        for ($x = 0; $x < 3; $x++) {
            $mark =  $board[$y][$x];
            if ($x === 0) {
                echo " {$mark} ";
            } else {
                echo "| {$mark} ";
            }
        }
        echo PHP_EOL;
        if ($y < 2) {
            echo "---+---+---\n";
        }
    }
}

function placeMark(int $x, int $y): bool
{
    global $turn, $board;

    if ($board[$y][$x] !== ' ') {
        return false;
    }
    $board[$y][$x] = $turn;

    return true;
}

function checkCoordinates(?int $x, ?int $y): bool
{
    if (!$y || !$x || $y < 1 || $y > 3 || $x < 1 || $x > 3) {
        return false;
    }

    return true;
}

function checkHorizontal(int $y): bool
{
    global $board;
    return ($board[$y][0] === $board[$y][1]) && ($board[$y][1] === $board[$y][2]);
}

function checkVertical(int $x): bool
{
    global $board;
    return ($board[0][$x] === $board[1][$x]) && ($board[1][$x] === $board[2][$x]);
}

function checkDiagonal(int $x, int $y): bool
{
    global $board, $turn;

    if ($x === 1 && $y === 0 || $x === 1 && $y === 3
        || $x === 0 && $y === 1 || $x === 3 && $y === 1) {
        return false;
    }

    return ($turn === $board[0][0] && $turn === $board[1][1] && $turn === $board[2][2])
        || ($turn === $board[0][2] && $turn === $board[1][1] && $turn === $board[2][0]);
}

function checkWinner(int $x, int $y): bool
{
    return checkHorizontal($y) || checkVertical($x) || checkDiagonal($x, $y);
}
