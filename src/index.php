<?php

declare(strict_types=1);

use Wawoxe\ProjectEuler\Problem1\MultiplesOfThreeOrFive;
use Wawoxe\ProjectEuler\Problem2\EvenFibonacciNumbers;

require_once dirname(__DIR__).'/vendor/autoload.php';

// https://projecteuler.net/problem=1
$multiplesOfThreeOrFive = new MultiplesOfThreeOrFive();
$multiplesOfThreeOrFiveAnswer = $multiplesOfThreeOrFive->findSumBelowLimit(1000);

printf("
===============================
|          Problem 1          |
===============================
Input: 1000
Answer: %d
===============================
", $multiplesOfThreeOrFiveAnswer);

// https://projecteuler.net/problem=2
$evenFibonacciNumbers = new EvenFibonacciNumbers();
$fibonacciNumbersSum = $evenFibonacciNumbers->sumFibonacciEvenNumbers(4000000);

printf("
===============================
|          Problem 2          |
===============================
Input: 4000000
Answer: %d
===============================
", $fibonacciNumbersSum);
