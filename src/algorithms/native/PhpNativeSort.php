<?php

require_once __DIR__ . '/../Algorithm.php';
require_once __DIR__ . '/../../lib/ArrayHelper.php';

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