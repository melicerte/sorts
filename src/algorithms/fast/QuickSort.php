<?php

require_once __DIR__ . '/../Algorithm.php';
require_once __DIR__ . '/../../lib/ArrayHelper.php';

class QuickSort implements Algorithm
{

    public function getName(): string
    {
        return 'quick sort';
    }

    public function sort(array $array): array
    {
        $this->doQuickSort($array, 0, count($array) - 1);

        return $array;
    }

    private function doQuickSort(array &$array, int $left, int $right)
    {
        if ($right > $left) {
            $i = $this->partition($array, $left, $right);
            $this->doQuickSort($array, $left, $i - 1);
            $this->doQuickSort($array, $i + 1, $right);
        }
    }

    private function partition(array &$array, int $left, int $right): int
    {
        $pivot = $array[$right];
        $i = $left - 1;
        $j = $right;
        do {
            do {
                $i++;
            } while ($array[$i] < $pivot);

            do {
                $j--;
            } while ($j > 0 && $array[$j] > $pivot);

            $temp = $array[$i];
            ArrayHelper::switchValues($array, $i, $j);
        } while ($j > $i);

        $array[$j] = $array[$i];
        $array[$i] = $array[$right];
        $array[$right] = $temp;

        return $i;
    }

}