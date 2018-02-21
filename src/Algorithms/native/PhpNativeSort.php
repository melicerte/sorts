<?php

namespace Melicerte\Sorts;

class PhpNativeSort implements Algorithm
{
    public function getName(): string
    {
        return 'PHP native sort';
    }

    public function sort(array $array): array
    {
        \sort($array);
        return $array;
    }
}