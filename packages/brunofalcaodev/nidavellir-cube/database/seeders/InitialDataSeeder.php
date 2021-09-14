<?php

namespace Nidavellir\Database\Seeders;

use Illuminate\Database\Seeder;
use Nidavellir\Cube\Models\Api;
use Nidavellir\Cube\Models\Exchange;
use Nidavellir\Cube\Models\OrderType;
use Nidavellir\Cube\Models\Quote;
use Nidavellir\Cube\Models\User;

class InitialDataSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create my user.
        $user = User::create([
            'name' => 'Bruno Falcao',
            'email' => 'me@brunofalcao.dev',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        // Create Kucoin Exchange.
        $exchange = Exchange::create([
            'name' => 'Kucoin',
            'canonical' => 'kucoin',
            'site_url' => 'kucoin.com',
            'api_url' => 'https://api.kucoin.com',
            'sandbox_api_url' => 'https://openapi-sandbox.kucoin.com',
        ]);

        // Create API instance.
        if (app()->environment() != 'production') {
            $api = Api::create([
                'description' => 'Kucoin api for development',
                'exchange_id' => $exchange->id,
                'user_id' => $user->id,
                'api_key' => env('KUCOIN_API_KEY'),
                'api_secret' => env('KUCOIN_API_SECRET'),
                'api_passphrase' => env('KUCOIN_API_PASSPHRASE'),
            ]);
        }

        // Order types
        OrderType::create([
            'name' => 'Market',
            'canonical' => 'market',
        ]);

        OrderType::create([
            'name' => 'Limit',
            'canonical' => 'limit',
        ]);

        OrderType::create([
            'name' => 'Stop Limit',
            'canonical' => 'stop-limit',
        ]);

        Quote::create([
            'name' => 'USDT',
            'canonical' => 'usdt',
        ]);

        Quote::create([
            'name' => 'EUR',
            'canonical' => 'eur',
        ]);

        Quote::create([
            'name' => 'BTC',
            'canonical' => 'btc',
        ]);
    }
}
