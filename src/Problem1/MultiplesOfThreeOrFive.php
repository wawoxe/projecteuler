<?php

declare(strict_types=1);

namespace Wawoxe\ProjectEuler\Problem1;

class MultiplesOfThreeOrFive
{
    public function findSum(int $limit): int
    {
        if ($limit <= 3) {
            return 0;
        }

        $result = 0;

        for ($i = 3; $i < $limit; $i++) {
            if ($i % 3 === 0 || $i % 5 === 0) {
                $result += $i;
            }
        }

        return $result;
    }
}
