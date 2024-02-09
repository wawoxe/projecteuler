<?php

declare(strict_types=1);

namespace Wawoxe\ProjectEuler\Tests;

use PHPUnit\Framework\TestCase;
use Wawoxe\ProjectEuler\Problem1\MultiplesOfThreeOrFive;

class MultiplesOfThreeOrFiveTest extends TestCase
{
    public function testFindSumWithLimitLessThanThree(): void
    {
        $multipleOfThreeOrFive = new MultiplesOfThreeOrFive();

        $this->assertSame(0, $multipleOfThreeOrFive->findSumBelowLimit(-4));
        $this->assertSame(0, $multipleOfThreeOrFive->findSumBelowLimit(0));
        $this->assertSame(0, $multipleOfThreeOrFive->findSumBelowLimit(2));
    }

    public function testFindSumWithLimitEqualThree(): void
    {
        $multipleOfThreeOrFive = new MultiplesOfThreeOrFive();

        $this->assertSame(0, $multipleOfThreeOrFive->findSumBelowLimit(3));
    }

    public function testFindSumWithLimitMoreThanThree(): void
    {
        $multipleOfThreeOrFive = new MultiplesOfThreeOrFive();

        $this->assertSame(3, $multipleOfThreeOrFive->findSumBelowLimit(4));
        $this->assertSame(23, $multipleOfThreeOrFive->findSumBelowLimit(10));
        $this->assertSame(20850, $multipleOfThreeOrFive->findSumBelowLimit(300));
        $this->assertSame(233168, $multipleOfThreeOrFive->findSumBelowLimit(1000));
    }
}