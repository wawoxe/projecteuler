<?php

declare(strict_types=1);

namespace Wawoxe\ProjectEuler\Problem1;

class MultiplesOfThreeOrFive
{
    /**
     * Use arithmetic progression formula for optimizing findSum function.
     * The time complexity of the original version with for() is O(n), where n is the value of the input limit.
     * The time complexity of the optimized version is O(1), which means it has constant-time complexity.
     */
    public function findSumBelowLimit(int $limit): int
    {
        if ($limit <= 3) {
            return 0;
        }

        $limit--; // Exclude the limit itself from the sum calculation

        $sumMultiplesThree = floor($limit / 3) * (3 + floor($limit / 3) * 3) / 2;
        $sumMultiplesFive = floor($limit / 5) * (5 + floor($limit / 5) * 5) / 2;
        $sumMultiplesFifteen = floor($limit / 15) * (15 + floor($limit / 15) * 15) / 2;

        $result = $sumMultiplesThree + $sumMultiplesFive - $sumMultiplesFifteen;

        return (int) $result;
    }
}
