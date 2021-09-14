<?php

namespace Nidavellir\Kucoin\Commands;

use Illuminate\Console\Command;
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

        $tokens = KucoinCrawler::allTokens();

        return 0;
    }
}
