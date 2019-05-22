<?php

namespace App\Policies;

use App\User;
use App\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can index the Project.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function index(User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the user can view the Project.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function view(User $authUser, Project $project)
    {
        return true;
    }

    /**
     * Determine whether the user can create Project.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function create(User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the user can show the Project.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function show(User $authUser, Project $project)
    {
        return true;
    }

    /**
     * Determine whether the user can update the Project.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function update(User $authUser, Project $project)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the Project.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function delete(User $authUser, Project $project)
    {
        return false;
    }
}
