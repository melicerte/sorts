<?php


class ArrayHelper
{
    public static function generateArray(int $number) {
        $array = range(1, $number);
        shuffle($array);
        return $array;
    }

    public static function switchValues(array &$array, int $i, int $j) {
        $temp = $array[$j];
        $array[$j] = $array[$i];
        $array[$i] = $temp;
    }

    public static function displayArray(array $array) {
        echo '[ ';

        $i = 0;
        foreach ($array as $item) {
            if ($i > 0) {
                echo ', ';
            }

            echo $item;

            $i++;
        }

        echo " ]\r\n";
    }
}