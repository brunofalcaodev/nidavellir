<?php

namespace Nidavellir\Cube\Observers;

use Nidavellir\Cube\Models\Token;

class TokenObserver
{
    /**
     * Handle the Token "saving" event.
     *
     * @param  \Nidavellir\Cube\Models\Token  $token
     * @return void
     */
    public function saving(Token $token)
    {
        $token->canonical = strtoupper($token->canonical);
    }

    /**
     * Handle the Token "created" event.
     *
     * @param  \Nidavellir\Cube\Models\Token  $token
     * @return void
     */
    public function created(Token $token)
    {
        //
    }

    /**
     * Handle the Token "updated" event.
     *
     * @param  \Nidavellir\Cube\Models\Token  $token
     * @return void
     */
    public function updated(Token $token)
    {
        //
    }

    /**
     * Handle the Token "deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Token  $token
     * @return void
     */
    public function deleted(Token $token)
    {
        //
    }

    /**
     * Handle the Token "restored" event.
     *
     * @param  \Nidavellir\Cube\Models\Token  $token
     * @return void
     */
    public function restored(Token $token)
    {
        //
    }

    /**
     * Handle the Token "force deleted" event.
     *
     * @param  \Nidavellir\Cube\Models\Token  $token
     * @return void
     */
    public function forceDeleted(Token $token)
    {
        //
    }
}
