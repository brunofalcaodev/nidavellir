<?php

namespace Nidavellir\Kucoin;

use Illuminate\Support\ServiceProvider;
use Nidavellir\Kucoin\Commands\AllTickers;

class NidavellirKucoinServiceProvider extends ServiceProvider
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
            AllTickers::class,
        ]);
    }
}
