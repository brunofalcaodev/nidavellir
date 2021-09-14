<?php

namespace Nidavellir\Cube\Observers;

use Nidavellir\Cube\Models\OrderType;

class OrderTypeObserver
{
    /**
     * Handle the OrderType "created" event.
     *
     * @param  \Nidavellir\Cube\Models\OrderType  $orderType
     * @return void
     */
    public function created(OrderType $orderType)
    {
        //
    }

    /**
     * Handle the OrderType "updated" event.
     *
     * @param  \Nidavellir\Cube\Models\OrderType  $orderType
     * @return void
     */
    public function updated(OrderType $orderType)
    {
        //
    }

    /**
     * Handle the OrderType "deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\OrderType  $orderType
     * @return void
     */
    public function deleted(OrderType $orderType)
    {
        //
    }

    /**
     * Handle the OrderType "restored" event.
     *
     * @param  \Nidavellir\Cube\Models\OrderType  $orderType
     * @return void
     */
    public function restored(OrderType $orderType)
    {
        //
    }

    /**
     * Handle the OrderType "force deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\OrderType  $orderType
     * @return void
     */
    public function forceDeleted(OrderType $orderType)
    {
        //
    }
}
