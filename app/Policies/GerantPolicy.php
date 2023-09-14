<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Gerant;
use Illuminate\Auth\Access\HandlesAuthorization;

class GerantPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the gerant can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list gerants');
    }

    /**
     * Determine whether the gerant can view the model.
     */
    public function view(User $user, Gerant $model): bool
    {
        return $user->hasPermissionTo('view gerants');
    }

    /**
     * Determine whether the gerant can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create gerants');
    }

    /**
     * Determine whether the gerant can update the model.
     */
    public function update(User $user, Gerant $model): bool
    {
        return $user->hasPermissionTo('update gerants');
    }

    /**
     * Determine whether the gerant can delete the model.
     */
    public function delete(User $user, Gerant $model): bool
    {
        return $user->hasPermissionTo('delete gerants');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete gerants');
    }

    /**
     * Determine whether the gerant can restore the model.
     */
    public function restore(User $user, Gerant $model): bool
    {
        return false;
    }

    /**
     * Determine whether the gerant can permanently delete the model.
     */
    public function forceDelete(User $user, Gerant $model): bool
    {
        return false;
    }
}
