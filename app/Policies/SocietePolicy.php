<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Societe;
use Illuminate\Auth\Access\HandlesAuthorization;

class SocietePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the societe can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list societes');
    }

    /**
     * Determine whether the societe can view the model.
     */
    public function view(User $user, Societe $model): bool
    {
        return $user->hasPermissionTo('view societes');
    }

    /**
     * Determine whether the societe can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create societes');
    }

    /**
     * Determine whether the societe can update the model.
     */
    public function update(User $user, Societe $model): bool
    {
        return $user->hasPermissionTo('update societes');
    }

    /**
     * Determine whether the societe can delete the model.
     */
    public function delete(User $user, Societe $model): bool
    {
        return $user->hasPermissionTo('delete societes');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete societes');
    }

    /**
     * Determine whether the societe can restore the model.
     */
    public function restore(User $user, Societe $model): bool
    {
        return false;
    }

    /**
     * Determine whether the societe can permanently delete the model.
     */
    public function forceDelete(User $user, Societe $model): bool
    {
        return false;
    }
}
