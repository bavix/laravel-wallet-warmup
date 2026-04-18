<?php

declare(strict_types=1);

namespace Bavix\WalletWarmUp;

use Illuminate\Support\ServiceProvider;

final class WarmUpServiceProvider extends ServiceProvider
{
    #[\Override]
    public function register(): void
    {
        $this->commands([WarmUpCommand::class]);
    }
}
