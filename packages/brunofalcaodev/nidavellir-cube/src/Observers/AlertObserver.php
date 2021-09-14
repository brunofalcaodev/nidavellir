<?php

namespace Nidavellir\Cube\Observers;

use Nidavellir\Cube\Models\Alert;

class AlertObserver
{
    /**
     * Handle the Alert "created" event.
     *
     * @param  \Nidavellir\Cube\Models\Alert  $alert
     * @return void
     */
    public function created(Alert $alert)
    {
        //
    }

    /**
     * Handle the Alert "updated" event.
     *
     * @param  \Nidavellir\Cube\Models\Alert  $alert
     * @return void
     */
    public function updated(Alert $alert)
    {
        //
    }

    /**
     * Handle the Alert "deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Alert  $alert
     * @return void
     */
    public function deleted(Alert $alert)
    {
        //
    }

    /**
     * Handle the Alert "restored" event.
     *
     * @param  \Nidavellir\Cube\Models\Alert  $alert
     * @return void
     */
    public function restored(Alert $alert)
    {
        //
    }

    /**
     * Handle the Alert "force deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Alert  $alert
     * @return void
     */
    public function forceDeleted(Alert $alert)
    {
        //
    }
}
