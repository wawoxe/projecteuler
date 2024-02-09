<?php

declare(strict_types=1);

use Wawoxe\ProjectEuler\Problem1\MultiplesOfThreeOrFive;

require_once dirname(__DIR__).'/vendor/autoload.php';

// https://projecteuler.net/problem=1
$multiplesOfThreeOrFive = new MultiplesOfThreeOrFive();
$multiplesOfThreeOrFiveAnswer = $multiplesOfThreeOrFive->findSum(1000);

printf("
==============================
|           Task 1           |
==============================
Input: 1000
Answer: %d
==============================
", $multiplesOfThreeOrFiveAnswer);
