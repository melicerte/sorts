<?php
require_once 'Algorithm.php';
require_once 'slow/SelectionSort.php';
require_once 'slow/InsertionSort.php';
require_once 'slow/BubbleSort.php';
require_once 'fast/MergeSort.php';
require_once 'fast/QuickSort.php';
require_once 'native/PhpNativeSort.php';

class AlgorithmFactory
{
    public static function getAlgorithm(string $name): Algorithm
    {
        switch ($name){
            case 'quick':
                return new QuickSort();
            case 'merge':
                return new MergeSort();
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