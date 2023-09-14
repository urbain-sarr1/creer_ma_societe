<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Associe;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssociePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the associe can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list associes');
    }

    /**
     * Determine whether the associe can view the model.
     */
    public function view(User $user, Associe $model): bool
    {
        return $user->hasPermissionTo('view associes');
    }

    /**
     * Determine whether the associe can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create associes');
    }

    /**
     * Determine whether the associe can update the model.
     */
    public function update(User $user, Associe $model): bool
    {
        return $user->hasPermissionTo('update associes');
    }

    /**
     * Determine whether the associe can delete the model.
     */
    public function delete(User $user, Associe $model): bool
    {
        return $user->hasPermissionTo('delete associes');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete associes');
    }

    /**
     * Determine whether the associe can restore the model.
     */
    public function restore(User $user, Associe $model): bool
    {
        return false;
    }

    /**
     * Determine whether the associe can permanently delete the model.
     */
    public function forceDelete(User $user, Associe $model): bool
    {
        return false;
    }
}
