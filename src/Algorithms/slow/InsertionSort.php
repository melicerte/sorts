<?php

namespace Melicerte\Sorts;

class InsertionSort implements Algorithm
{
    public function getName(): string
    {
        return 'insertion sort';
    }

    public function sort(array $array): array
    {
        $nb = count($array);

        for ($i=0; $i < $nb; $i++) {
            $this->shiftRight($array, $i, $array[$i]);
        }

        return $array;
    }

    private function shiftRight(&$array, $index, $value) {
        $j = $index;
        while ($j > 0 && $array[$j - 1] > $value) {
            $array[$j] = $array[$j - 1];
            $j--;
        }
        $array[$j] = $value;
    }
}