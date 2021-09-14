<?php

namespace Nidavellir\Abstracts\Contracts;

use Illuminate\Support\Collection;

interface Crawler
{
    /**
     * Retrieves all token pairs from the exchange and loads them into
     * the database.
     *
     * @return \Illuminate\Support\Collection
     */
    public function allTokens();

    /**
     * Connects to the exchange given env or config parameters.
     *
     * @return mixed The exchange api connection instance
     */
    public function connect();
}
