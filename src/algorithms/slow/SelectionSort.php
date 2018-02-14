<?php

require_once __DIR__ . '/../Algorithm.php';
require_once __DIR__ . '/../../lib/ArrayHelper.php';

class SelectionSort implements Algorithm
{
    public function getName(): string
    {
        return 'selection sort';
    }

    public function sort(array $array): array
    {
        $nb = count($array);

        for ($i=0; $i < $nb; $i++) {
            $minimum = $i;
            for ($j = $i + 1;$j < $nb;$j++) {
                if ($array[$j] < $array[$minimum]) {
                    $minimum = $j;
                }
            }

            if ($minimum !== $i) {
                ArrayHelper::switchValues($array, $i, $minimum);
            }
        }

        return $array;
    }
}