<?php

declare(strict_types=1);

namespace Bavix\WalletWarmUp;

use Bavix\Wallet\Models\Wallet;
use Illuminate\Console\Command;

final class WarmUpCommand extends Command
{
    protected $signature = 'wallet:warm-up';
    protected $description = 'Warning! Makes refreshBalance for all wallets.';

    public function handle(Wallet $wallet): void
    {
        $wallet::query()->each(static fn (Wallet $wallet): bool => $wallet->refreshBalance());
    }
}
