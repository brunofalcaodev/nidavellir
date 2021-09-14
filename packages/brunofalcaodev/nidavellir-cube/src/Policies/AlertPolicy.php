<?php

namespace Nidavellir\Cube\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Nidavellir\Cube\Models\Alert;
use Nidavellir\Cube\Models\User;

class AlertPolicy
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
     * @param  \Nidavellir\Cube\Models\Alert  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Alert $model)
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
     * @param  \Nidavellir\Cube\Models\Alert  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Alert $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\Alert  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Alert $model)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\Alert  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Alert $model)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Nidavellir\Cube\Models\User  $user
     * @param  \Nidavellir\Cube\Models\Alert  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Alert $model)
    {
        return true;
    }
}
