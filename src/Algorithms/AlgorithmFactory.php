<?php
namespace Melicerte\Sorts;

class AlgorithmFactory
{
    public static function getAlgorithm(string $name): Algorithm
    {
        switch ($name){
            case 'quick':
                return new QuickSort();
            case 'merge':
                return new MergeSort();
            case 'merge-poor':
                return new MergePoorSort();
            case 'bubble':
                return new BubbleSort();
            case 'insertion':
                return new InsertionSort();
            case 'selection':
                return new SelectionSort();
            case 'native':
            default:
                return new PhpNativeSort();
        }
    }
}