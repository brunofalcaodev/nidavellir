<?php

namespace Nidavellir\Cube\Observers;

use Nidavellir\Cube\Models\Order;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     *
     * @param  \Nidavellir\Cube\Models\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        //
    }

    /**
     * Handle the Order "updated" event.
     *
     * @param  \Nidavellir\Cube\Models\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        //
    }

    /**
     * Handle the Order "deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     *
     * @param  \Nidavellir\Cube\Models\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
