<?php

declare(strict_types=1);

namespace Bavix\WalletWarmUp\Test;

/**
 * @internal
 */
final class WarmUpTest extends TestCase
{
    public function testSimple(): void
    {
        $this->artisan('wallet:warm-up')->assertSuccessful();
    }
}
