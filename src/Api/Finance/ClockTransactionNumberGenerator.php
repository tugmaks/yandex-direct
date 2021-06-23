<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\Finance;

use function time;

final class ClockTransactionNumberGenerator implements TransactionNumberGeneratorInterface
{
    /**
     * {@inheritDoc}
     */
    public function generate(): int
    {
        return time();
    }
}