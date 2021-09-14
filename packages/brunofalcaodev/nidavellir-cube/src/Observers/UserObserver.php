<?php

namespace Nidavellir\Cube\Observers;

use Nidavellir\Cube\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
