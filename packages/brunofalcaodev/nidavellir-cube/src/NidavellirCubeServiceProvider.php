<?php

namespace Nidavellir\Cube;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Nidavellir\Cube\Models\Api;
use Nidavellir\Cube\Models\Exchange;
use Nidavellir\Cube\Models\Token;
use Nidavellir\Cube\Models\User;
use Nidavellir\Cube\Observers\ApiObserver;
use Nidavellir\Cube\Observers\ExchangeObserver;
use Nidavellir\Cube\Observers\TokenObserver;
use Nidavellir\Cube\Observers\UserObserver;
use Nidavellir\Cube\Policies\ApiPolicy;
use Nidavellir\Cube\Policies\ExchangePolicy;
use Nidavellir\Cube\Policies\TokenPolicy;
use Nidavellir\Cube\Policies\UserPolicy;

class NidavellirCubeServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->importMigrations();
        $this->registerObservers();
        $this->registerPolicies();
        $this->publishResources();
    }

    protected function importMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function registerObservers(): void
    {
        User::observe(UserObserver::class);
        Api::observe(ApiObserver::class);
        Token::observe(TokenObserver::class);
        Exchange::observe(ExchangeObserver::class);
    }

    protected function registerPolicies(): void
    {
        Gate::policy(User::class, UserPolicy::class);
        Gate::policy(Token::class, TokenPolicy::class);
        Gate::policy(Exchange::class, ExchangePolicy::class);
        Gate::policy(Api::class, ApiPolicy::class);
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../resources/overrides/' => base_path('/'),
        ], 'nidavellir-cube');
    }
}
