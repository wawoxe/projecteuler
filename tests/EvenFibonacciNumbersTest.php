<?php

declare(strict_types=1);

namespace Wawoxe\ProjectEuler\Tests;

use PHPUnit\Framework\TestCase;
use Wawoxe\ProjectEuler\Problem2\EvenFibonacciNumbers;

class EvenFibonacciNumbersTest extends TestCase
{
    public function testEvenFibonacciNumbersSum(): void
    {
        $evenFibonacciNumbers = new EvenFibonacciNumbers();

        $this->assertSame(0, $evenFibonacciNumbers->sumFibonacciEvenNumbers(1));
        $this->assertSame(10, $evenFibonacciNumbers->sumFibonacciEvenNumbers(8));
        $this->assertSame(44, $evenFibonacciNumbers->sumFibonacciEvenNumbers(60));
        $this->assertSame(4613732, $evenFibonacciNumbers->sumFibonacciEvenNumbers(4000000));
    }
}