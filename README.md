# Sorts
PHP Implementation of some sort algorithms.

It generates a randomly unsorted array of integers, and executes the selected algorithm upon it.

For educational use.

## Implemented sorts

* PHP native \sort() function : `native`
* Selection sort : `selection`
* Insertion sort : `insertion`
* Bubble sort : `bubble`
* Merge poor sort : `merge-poor`
* Merge sort : `merge`
* QuickSort : `quick`

**Note** : Merge poor sort is a bad implementation found on internet.
Important to see that bad implementation leads to poor results.

## Requirements
* Docker
* docker-compose

## Prepare
`composer dumpautoload -o`

## Launch
Start container :

`docker-compose up -d`

Execute sort algorithm :

`docker-compose exec php php sort.php [algorithm name] [size of array to generate]`

Example to launch the Quick sort algorithm on an array of 1000 integers :

`docker-compose exec php php sort.php quick 1000`

## Display arrays
If you want to see the initial array, and the sorted one, just add "display" at the end of the command :

`docker-compose exec php php sort.php quick 100 display`