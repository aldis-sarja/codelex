<?php

require 'Geometry.php';

function calculateArea()
{
    $prompt = "Enter your choice (1-4) : ";
    $result = null;

    echo "Geometry Calculator\n";
    echo "1. Calculate the Area of a Circle\n";
    echo "2. Calculate the Area of a Rectangle\n";
    echo "3. Calculate the Area of a Triangle\n";
    echo "4. Quit\n";

    while ($line = readline($prompt)) {
        list($choice) = sscanf($line, "%d");

        switch ($choice) {
            case 1:
                $line = readline("radius for circle: ");
                list($radius) = sscanf($line, "%f");
                if ($radius)
                    $result = Geometry::circleArea($radius);
                else
                    echo "Error! Not a number\n";
                break;
            case 2:
                $line = readline("length and width for rectangle: ");
                list($length, $width) = sscanf($line, "%f %f");
                if ($length && $width)
                    $result = Geometry::rectangleArea($length, $width);
                else
                    echo "Error! Not a number\n";
                break;
            case 3:
                $line = readline("base and height for triangle: ");
                list($base, $height) = sscanf($line, "%f %f");
                if ($base && $height)
                    $result = Geometry::triangleArea($base, $height);
                else
                    echo "Error! Not a number\n";
                break;
            case 4:
                echo "bye!";
                return;
            default:
                echo "Error! Choose correct menu item from 1 to 4\n";
        }
        echo "result: {$result}\n";
        if ($result)
            echo "The area is: {$result}" . PHP_EOL;
//        else
//            echo "Error! Incorrect input data!\n";

        echo PHP_EOL;
    }
}

calculateArea();
