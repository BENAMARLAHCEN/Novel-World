<?php

namespace App\Policies;

use App\Models\Review;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ReviewPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasRole('admin')
            ? Response::allow()
            : Response::deny('You are not authorized to view review.');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Review $review)
    {
        return $user->hasRole('Reader')
            ? Response::allow()
            : Response::deny('You are not authorized to view this review.');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasRole('Reader')
            ? Response::allow()
            : Response::deny('You are not authorized to create a review.');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Review $review)
    {
        return $user->id === $review->user_id
            ? Response::allow()
            : Response::deny('You are not authorized to update this review.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Review $review)
    {
        return $user->id === $review->user_id
            ? Response::allow()
            : Response::deny('You are not authorized to delete this review.');
    }
}
