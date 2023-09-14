<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Infos;
use Illuminate\Auth\Access\HandlesAuthorization;

class InfosPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the infos can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list allinfos');
    }

    /**
     * Determine whether the infos can view the model.
     */
    public function view(User $user, Infos $model): bool
    {
        return $user->hasPermissionTo('view allinfos');
    }

    /**
     * Determine whether the infos can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create allinfos');
    }

    /**
     * Determine whether the infos can update the model.
     */
    public function update(User $user, Infos $model): bool
    {
        return $user->hasPermissionTo('update allinfos');
    }

    /**
     * Determine whether the infos can delete the model.
     */
    public function delete(User $user, Infos $model): bool
    {
        return $user->hasPermissionTo('delete allinfos');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete allinfos');
    }

    /**
     * Determine whether the infos can restore the model.
     */
    public function restore(User $user, Infos $model): bool
    {
        return false;
    }

    /**
     * Determine whether the infos can permanently delete the model.
     */
    public function forceDelete(User $user, Infos $model): bool
    {
        return false;
    }
}
