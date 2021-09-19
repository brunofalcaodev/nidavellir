<?php

namespace Nidavellir\Coingecko\Commands;

use Illuminate\Console\Command;
use Nidavellir\Coingecko\CoingeckoCrawler;
use Nidavellir\Cube\Models\Ticker;

class UpdateTickers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coingecko:update-tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '( https://www.coingecko.com/en/api/documentation )';

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
        $this->info('Updating all Coingecko tokens...');

        $data = CoingeckoCrawler::allTickers();

        foreach ($data->response() as $token) {
            Ticker::updateOrCreate(
                ['canonical' => $token['symbol']],
                ['name' => $token['name']]
            );
        }

        $this->info('Done.');

        return 0;
    }
}
