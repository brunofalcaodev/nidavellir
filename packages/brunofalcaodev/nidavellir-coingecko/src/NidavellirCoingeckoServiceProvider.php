<?php

namespace Nidavellir\Coingecko;

use Illuminate\Support\ServiceProvider;
use Nidavellir\Coingecko\Commands\UpdateTokens;

class NidavellirCoingeckoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerCommands();
    }

    public function register()
    {
        //
    }

    protected function registerCommands(): void
    {
        $this->commands([
            UpdateTokens::class,
        ]);
    }
}
