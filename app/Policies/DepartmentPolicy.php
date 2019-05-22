<?php

namespace App\Policies;

use App\User;
use App\Department;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can index the Department.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function index(User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the user can view the Department.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function view(User $authUser, Department $department)
    {
        return true;
    }

    /**
     * Determine whether the user can create Department.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function create(User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the user can show the Department.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function show(User $authUser, Department $department)
    {
        return true;
    }

    /**
     * Determine whether the user can update the Department.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function update(User $authUser, Department $department)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the Department.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function delete(User $authUser, Department $department)
    {
        return false;
    }
}
