<?php

namespace Nidavellir\Cube\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Nidavellir\Cube\Models\Api;
use Nidavellir\Cube\Models\User;

class ApiPolicy
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
     * @param  \Nidavellir\Cube\Models\Api  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Api $model)
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
     * @param  \Nidavellir\Cube\Models\Api  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Api $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\Api  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Api $model)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\Api  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Api $model)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\Api  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Api $model)
    {
        return true;
    }
}
