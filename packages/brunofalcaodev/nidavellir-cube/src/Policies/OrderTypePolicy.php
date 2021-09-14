<?php

namespace Nidavellir\Cube\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Nidavellir\Cube\Models\OrderType;
use Nidavellir\Cube\Models\User;

class OrderTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\OrderType  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, OrderType $model)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\OrderType  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, OrderType $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\OrderType  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, OrderType $model)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\OrderType  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, OrderType $model)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\OrderType  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, OrderType $model)
    {
        return true;
    }
}
