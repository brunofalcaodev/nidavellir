<?php

namespace Nidavellir\Cube\Observers;

use Nidavellir\Cube\Models\Position;

class PositionObserver
{
    /**
     * Handle the Position "created" event.
     *
     * @param  \Nidavellir\Cube\Models\Position  $position
     * @return void
     */
    public function created(Position $position)
    {
        //
    }

    /**
     * Handle the Position "updated" event.
     *
     * @param  \Nidavellir\Cube\Models\Position  $position
     * @return void
     */
    public function updated(Position $position)
    {
        //
    }

    /**
     * Handle the Position "deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Position  $position
     * @return void
     */
    public function deleted(Position $position)
    {
        //
    }

    /**
     * Handle the Position "restored" event.
     *
     * @param  \Nidavellir\Cube\Models\Position  $position
     * @return void
     */
    public function restored(Position $position)
    {
        //
    }

    /**
     * Handle the Position "force deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Position  $position
     * @return void
     */
    public function forceDeleted(Position $position)
    {
        //
    }
}
