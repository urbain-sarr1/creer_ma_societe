<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Conjoint;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConjointPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the conjoint can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list conjoints');
    }

    /**
     * Determine whether the conjoint can view the model.
     */
    public function view(User $user, Conjoint $model): bool
    {
        return $user->hasPermissionTo('view conjoints');
    }

    /**
     * Determine whether the conjoint can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create conjoints');
    }

    /**
     * Determine whether the conjoint can update the model.
     */
    public function update(User $user, Conjoint $model): bool
    {
        return $user->hasPermissionTo('update conjoints');
    }

    /**
     * Determine whether the conjoint can delete the model.
     */
    public function delete(User $user, Conjoint $model): bool
    {
        return $user->hasPermissionTo('delete conjoints');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete conjoints');
    }

    /**
     * Determine whether the conjoint can restore the model.
     */
    public function restore(User $user, Conjoint $model): bool
    {
        return false;
    }

    /**
     * Determine whether the conjoint can permanently delete the model.
     */
    public function forceDelete(User $user, Conjoint $model): bool
    {
        return false;
    }
}
