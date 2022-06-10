<?php

class Geometry
{
    public static function circleArea(float $radius): ?float
    {
        if ($radius < 0) {
            echo "Error! can't accept negative number!\n";
            return null;
        }

        return pi() * $radius * 2;
    }

    public static function rectangleArea(float $length, float $width): ?float
    {
        if ($length < 0 || $width < 0) {
            echo "Error! can't accept negative number!\n";
            return null;
        }

        return $length * $width;
    }

    public static function triangleArea(float $base, float $height): ?float
    {
        if ($base < 0 || $height < 0) {
            echo "Error! can't accept negative number!\n";
            return null;
        }

        return ($base * $height)/2;
    }
}
