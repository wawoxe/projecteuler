<?php

declare(strict_types=1);

namespace Wawoxe\ProjectEuler\Problem2;

class EvenFibonacciNumbers
{
    public function sumFibonacciEvenNumbers(int $limit): int
    {
        $sum = 0;
        $fibonacciPrev = 0;
        $fibonacciCurr = 1;

        for (; $fibonacciCurr <= $limit;) {
            if ($fibonacciCurr % 2 === 0) {
                $sum += $fibonacciCurr;
            }

            $fibonacciNext = $fibonacciPrev + $fibonacciCurr;
            $fibonacciPrev = $fibonacciCurr;
            $fibonacciCurr = $fibonacciNext;
        }

        return $sum;
    }
}
