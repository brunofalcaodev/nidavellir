<?php

namespace Nidavellir\Cube\Observers;

use Nidavellir\Cube\Models\Quote;

class QuoteObserver
{
    /**
     * Handle the Quote "created" event.
     *
     * @param  \Nidavellir\Cube\Models\Quote  $quote
     * @return void
     */
    public function created(Quote $quote)
    {
        //
    }

    /**
     * Handle the Quote "updated" event.
     *
     * @param  \Nidavellir\Cube\Models\Quote  $quote
     * @return void
     */
    public function updated(Quote $quote)
    {
        //
    }

    /**
     * Handle the Quote "deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Quote  $quote
     * @return void
     */
    public function deleted(Quote $quote)
    {
        //
    }

    /**
     * Handle the Quote "restored" event.
     *
     * @param  \Nidavellir\Cube\Models\Quote  $quote
     * @return void
     */
    public function restored(Quote $quote)
    {
        //
    }

    /**
     * Handle the Quote "force deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Quote  $quote
     * @return void
     */
    public function forceDeleted(Quote $quote)
    {
        //
    }
}
