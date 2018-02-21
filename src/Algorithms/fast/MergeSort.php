<?php

namespace Melicerte\Sorts;

class MergeSort implements Algorithm
{
    public function getName(): string
    {
        return 'merge sort';
    }

    function sort(array $array): array
    {
        // Only process if we're not down to one piece of data
        if (\count($array) > 1) {

            // Find out the middle of the current data set and split it there to obtain to halfs
            $array_middle = \round(\count($array) / 2, 0, PHP_ROUND_HALF_DOWN);
            // and now for some recursive magic
            $array_part1 = $this->sort(\array_slice($array, 0, $array_middle));
            $array_part2 = $this->sort(\array_slice($array, $array_middle, \count($array)));
            // Setup counters so we can remember which piece of data in each half we're looking at
            $counter1 = $counter2 = 0;
            // iterate over all pieces of the currently processed array, compare size & reassemble
            $nb = \count($array);
            for ($i = 0; $i < $nb; $i++) {
                // if we're done processing one half, take the rest from the 2nd half
                if ($counter1 === \count($array_part1)) {
                    $array[$i] = $array_part2[$counter2];
                    ++$counter2;
                    // if we're done with the 2nd half as well or as long as pieces in the first half are still smaller than the 2nd half
                } elseif (($counter2 === \count($array_part2)) || ($array_part1[$counter1] < $array_part2[$counter2])) {
                    $array[$i] = $array_part1[$counter1];
                    ++$counter1;
                } else {
                    $array[$i] = $array_part2[$counter2];
                    ++$counter2;
                }
            }
        }

        return $array;
    }

}