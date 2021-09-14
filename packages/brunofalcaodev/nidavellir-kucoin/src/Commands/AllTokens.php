<?php

namespace Nidavellir\Kucoin\Commands;

use Illuminate\Console\Command;
use Nidavellir\Cube\Models\Api;
use Nidavellir\Kucoin\KucoinCrawler;

class AllTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kucoin:all-tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '( https://docs.kucoin.com/#get-all-tickers )';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Fetching all tokens...');

        $response = KucoinCrawler::withApi(Api::firstWhere('id', 1))
                                 ->allTokens();

        dd($response);

        dd($response->response());

        /*
        KuCoinApi::setBaseUri('https://openapi-sandbox.kucoin.com');

        // Auth version v2 (recommend)
        $auth = new Auth('key', 'secret', 'passphrase', Auth::API_KEY_VERSION_V2);
        // Auth version v1
        // $auth = new Auth('key', 'secret', 'passphrase');

        $api = new Symbol($auth);

        try {
            $result = $api->getAllTickers();
            var_dump($result['ticker'][0]);
        } catch (HttpException $e) {
            var_dump($e->getMessage());
        } catch (BusinessException $e) {
            var_dump($e->getMessage());
        }

        return 0;
        */
        return 0;
    }
}
