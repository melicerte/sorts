<?php
require_once 'algorithms/AlgorithmFactory.php';
require_once 'lib/ArrayHelper.php';
require_once 'lib/Timer.php';

// Read parameters
$algorithmName = $argv[1];
$arraySize = $argv[2];
$display = isset($argv[3]) && $argv[3] === 'display';

// Generate array
echo "Generating array with $arraySize elements ...";
$array = ArrayHelper::generateArray($arraySize);
echo " done\r\n";

// Display initial array
if ($display) {
    ArrayHelper::displayArray($array);
}

// Get algorithm
$algorithm = AlgorithmFactory::getAlgorithm($algorithmName);
echo 'Sort array using '.$algorithm->getName()." algorithm. Go !\r\n";

// Sort !
$timer = new Timer();
$timer->start();
$sortedArray = $algorithm->sort($array);
$timer->end();

// Display sorted array
if ($display) {
    ArrayHelper::displayArray($sortedArray);
}

// Display execution time
echo 'Execution time = '.$timer->getTime()."s\r\n";