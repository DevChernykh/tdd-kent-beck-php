<?php

declare(strict_types=1);

use Chernykh\TddKentBeck\Money\Dollar;
use PHPUnit\Framework\TestCase;

class MultiCurrencyMoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $five->times(2);

        $this->assertEquals(10, $five->amount);
    }
}
