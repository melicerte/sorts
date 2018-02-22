<?php

namespace Melicerte\Sorts;

use Melicerte\Sorts\Helper\ArrayHelper;

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
            $isSorted = true;

            for ($j = 0;$j < $i;$j++) {
                if ($array[$j + 1] < $array[$j]) {
                    ArrayHelper::switchValues($array, $j + 1, $j);
                    $isSorted = false;
                }
            }

            // Optimize : if no values switched, this is the end
            if ($isSorted) {
                break;
            }
        }

        return $array;
    }
}