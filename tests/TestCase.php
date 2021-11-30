<?php

declare(strict_types=1);

namespace Bavix\WalletWarmUp\Test;

use Bavix\Wallet\WalletServiceProvider;
use Bavix\WalletWarmUp\WarmUpServiceProvider;
use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

/**
 * @internal
 */
class TestCase extends OrchestraTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate')->run();
    }

    /**
     * @param Application $app
     */
    protected function getPackageProviders($app): array
    {
        return [
            WalletServiceProvider::class,
            WarmUpServiceProvider::class,
        ];
    }
}
