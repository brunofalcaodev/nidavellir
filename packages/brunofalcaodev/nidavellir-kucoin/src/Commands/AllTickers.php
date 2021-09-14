<?php

namespace Nidavellir\Kucoin\Commands;

use Illuminate\Console\Command;

class AllTickers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kucoin:all-tickers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all Kucoin tickers and loads them into the database';

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
        $this->info('Fetching all tickers');
        return 0;
    }
}
