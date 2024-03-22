<?php

namespace App\Policies;

use App\Models\Novel;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NovelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('novel-list')
            ? Response::allow()
            : Response::deny('You do not have permission to view novels.');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Novel $novel)
    {
        return $user->hasPermissionTo('novel-show') && $user->id === $novel->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to view novels.');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('novel-create')
            ? Response::allow()
            : Response::deny('You do not have permission to create novels.');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Novel $novel)
    {
        return $user->hasPermissionTo('novel-edit')  && $user->id === $novel->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to update novels.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Novel $novel)
    {
        return $user->hasPermissionTo('novel-delete') && $user->id === $novel->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to delete novels.');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Novel $novel)
    {
        return $user->hasPermissionTo('novel-restore') && $user->id === $novel->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to restore novels.');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Novel $novel)
    {
        return $user->hasPermissionTo('novel-force-delete') && $user->id === $novel->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to permanently delete novels.');
    }
}
