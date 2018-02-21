<?php
namespace Melicerte\Sorts;

class MergeSort implements Algorithm
{
    public function getName(): string
    {
        return 'merge sort';
    }

    public function sort(array $array): array
    {
        $nb = count($array);

        if ($nb <= 1) {
            return $array;
        }

        // Split our input array into two halves
        $half = (int)($nb / 2);
        $leftFrag = array_slice($array, 0, $half);
        $rightFrag = array_slice($array, $half);

        // RECURSION
        // Split the two halves into their respective halves...
        $leftFrag = $this->sort($leftFrag);
        $rightFrag = $this->sort($rightFrag);

        return $this->merge($leftFrag, $rightFrag);

    }

    private function merge(array &$lF, array &$rF): array
    {
        $result = array();

        // While both arrays have something in them
        while (count($lF) > 0 && count($rF) > 0) {
            if ($lF[0] <= $rF[0]) {
                array_push($result, array_shift($lF));
            } else {
                array_push($result, array_shift($rF));
            }
        }

        // did not see this in the pseudo code,
        // but it became necessary as one of the arrays
        // can become empty before the other
        array_splice($result, count($result), 0, $lF);
        array_splice($result, count($result), 0, $rF);

        return $result;
    }
}