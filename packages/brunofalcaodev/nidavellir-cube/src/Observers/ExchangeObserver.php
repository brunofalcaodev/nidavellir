<?php

namespace Nidavellir\Cube\Observers;

use Nidavellir\Cube\Models\Exchange;

class ExchangeObserver
{
    /**
     * Handle the Exchange "created" event.
     *
     * @param  \Nidavellir\Cube\Models\Exchange  $exchange
     * @return void
     */
    public function created(Exchange $exchange)
    {
        //
    }

    /**
     * Handle the Exchange "updated" event.
     *
     * @param  \Nidavellir\Cube\Models\Exchange  $exchange
     * @return void
     */
    public function updated(Exchange $exchange)
    {
        //
    }

    /**
     * Handle the Exchange "deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Exchange  $exchange
     * @return void
     */
    public function deleted(Exchange $exchange)
    {
        //
    }

    /**
     * Handle the Exchange "restored" event.
     *
     * @param  \Nidavellir\Cube\Models\Exchange  $exchange
     * @return void
     */
    public function restored(Exchange $exchange)
    {
        //
    }

    /**
     * Handle the Exchange "force deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Exchange  $exchange
     * @return void
     */
    public function forceDeleted(Exchange $exchange)
    {
        //
    }
}
