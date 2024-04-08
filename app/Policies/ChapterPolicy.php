<?php

namespace App\Policies;

use App\Models\Chapter;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ChapterPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('chapter-list')
            ? Response::allow()
            : Response::deny('You do not have permission to view chapters.');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Chapter $chapter)
    {
        return $user->hasPermissionTo('chapter-show') && $user->id === $chapter->novel->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to view chapters.');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('chapter-create')
            ? Response::allow()
            : Response::deny('You do not have permission to create chapters.');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Chapter $chapter)
    {
        return $user->hasPermissionTo('chapter-edit') && $user->id === $chapter->novel->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to update chapters.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Chapter $chapter)
    {
        return $user->hasPermissionTo('chapter-delete') && $user->id === $chapter->novel->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to delete chapters.');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Chapter $chapter)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Chapter $chapter)
    {
        //
    }
}
