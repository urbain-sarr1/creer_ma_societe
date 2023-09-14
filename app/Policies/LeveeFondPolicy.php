<?php

namespace App\Policies;

use App\Models\User;
use App\Models\LeveeFond;
use Illuminate\Auth\Access\HandlesAuthorization;

class LeveeFondPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the leveeFond can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list leveefonds');
    }

    /**
     * Determine whether the leveeFond can view the model.
     */
    public function view(User $user, LeveeFond $model): bool
    {
        return $user->hasPermissionTo('view leveefonds');
    }

    /**
     * Determine whether the leveeFond can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create leveefonds');
    }

    /**
     * Determine whether the leveeFond can update the model.
     */
    public function update(User $user, LeveeFond $model): bool
    {
        return $user->hasPermissionTo('update leveefonds');
    }

    /**
     * Determine whether the leveeFond can delete the model.
     */
    public function delete(User $user, LeveeFond $model): bool
    {
        return $user->hasPermissionTo('delete leveefonds');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete leveefonds');
    }

    /**
     * Determine whether the leveeFond can restore the model.
     */
    public function restore(User $user, LeveeFond $model): bool
    {
        return false;
    }

    /**
     * Determine whether the leveeFond can permanently delete the model.
     */
    public function forceDelete(User $user, LeveeFond $model): bool
    {
        return false;
    }
}
