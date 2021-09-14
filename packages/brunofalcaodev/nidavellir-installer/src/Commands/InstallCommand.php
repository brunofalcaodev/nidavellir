<?php

namespace Nidavellir\Installer\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nidavellir:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs Nidavellir';

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
        $this->info(
            "
 |\ | o  _|  _.     _  | | o ._
 | \| | (_| (_| \/ (/_ | | | |
"
        );

        remove_directory(base_path('app/Models'));

        return 0;
    }
}
