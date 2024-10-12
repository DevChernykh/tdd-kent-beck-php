<?php

declare(strict_types=1);

namespace Chernykh\TddKentBeck\Money;

class Dollar
{
    public function __construct(
        public int $amount,
    ) {
    }

    public function times(int $multiplier): void
    {
        $this->amount *= $multiplier;
    }
}
