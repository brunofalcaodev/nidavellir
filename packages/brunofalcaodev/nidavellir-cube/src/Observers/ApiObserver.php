<?php

namespace Nidavellir\Cube\Observers;

use Nidavellir\Cube\Models\Api;

class ApiObserver
{
    /**
     * Handle the Api "saving" event.
     *
     * @param  \Nidavellir\Cube\Models\Api  $api
     * @return void
     */
    public function saving(Api $api)
    {
        if (blank($api->hashcode)) {
            $api->hashcode = uniqid();
        }
    }

    /**
     * Handle the Api "created" event.
     *
     * @param  \Nidavellir\Cube\Models\Api  $api
     * @return void
     */
    public function created(Api $api)
    {
        //
    }

    /**
     * Handle the Api "updated" event.
     *
     * @param  \Nidavellir\Cube\Models\Api  $api
     * @return void
     */
    public function updated(Api $api)
    {
        //
    }

    /**
     * Handle the Api "deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Api  $api
     * @return void
     */
    public function deleted(Api $api)
    {
        //
    }

    /**
     * Handle the Api "restored" event.
     *
     * @param  \Nidavellir\Cube\Models\Api  $api
     * @return void
     */
    public function restored(Api $api)
    {
        //
    }

    /**
     * Handle the Api "force deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Api  $api
     * @return void
     */
    public function forceDeleted(Api $api)
    {
        //
    }
}
