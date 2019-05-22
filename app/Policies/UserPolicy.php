<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can index the User.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function index(User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the user can view the User.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function view(User $authUser, User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create User.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function create(User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the user can show the User.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function show(User $authUser, User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the User.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function update(User $authUser, User $user)
    {
        return $user->id === $authUser->id;
    }

    /**
     * Determine whether the user can delete the User.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function delete(User $authUser, User $user)
    {
        return false;
    }
}
