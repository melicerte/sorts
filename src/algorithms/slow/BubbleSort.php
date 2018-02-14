<?php

require_once __DIR__ . '/../Algorithm.php';
require_once __DIR__ . '/../../lib/ArrayHelper.php';

class BubbleSort implements Algorithm
{
    public function getName(): string
    {
        return 'bubble sort';
    }

    public function sort(array $array): array
    {
        $nb = count($array);

        for ($i = $nb - 1; $i >= 1; $i--) {
            for ($j = 0;$j < $i;$j++) {
                if ($array[$j + 1] < $array[$j]) {
                    ArrayHelper::switchValues($array, $j + 1, $j);
                }
            }
        }

        return $array;
    }
}