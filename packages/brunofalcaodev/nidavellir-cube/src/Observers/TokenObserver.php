<?php

namespace Nidavellir\Cube\Observers;

use Nidavellir\Cube\Models\Ticker;

class TickerObserver
{
    /**
     * Handle the Ticker "saving" event.
     *
     * @param  \Nidavellir\Cube\Models\Ticker  $token
     * @return void
     */
    public function saving(Ticker $token)
    {
        $token->canonical = strtoupper($token->canonical);
    }

    /**
     * Handle the Ticker "created" event.
     *
     * @param  \Nidavellir\Cube\Models\Ticker  $token
     * @return void
     */
    public function created(Ticker $token)
    {
        //
    }

    /**
     * Handle the Ticker "updated" event.
     *
     * @param  \Nidavellir\Cube\Models\Ticker  $token
     * @return void
     */
    public function updated(Ticker $token)
    {
        //
    }

    /**
     * Handle the Ticker "deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Ticker  $token
     * @return void
     */
    public function deleted(Ticker $token)
    {
        //
    }

    /**
     * Handle the Ticker "restored" event.
     *
     * @param  \Nidavellir\Cube\Models\Ticker  $token
     * @return void
     */
    public function restored(Ticker $token)
    {
        //
    }

    /**
     * Handle the Ticker "force deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Ticker  $token
     * @return void
     */
    public function forceDeleted(Ticker $token)
    {
        //
    }
}
