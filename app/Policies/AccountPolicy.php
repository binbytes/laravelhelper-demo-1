<?php

namespace App\Policies;

use App\User;
use App\Account;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can index the Account.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function index(User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the user can view the Account.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function view(User $authUser, Account $account)
    {
        return true;
    }

    /**
     * Determine whether the user can create Account.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function create(User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the user can show the Account.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function show(User $authUser, Account $account)
    {
        return true;
    }

    /**
     * Determine whether the user can update the Account.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function update(User $authUser, Account $account)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the Account.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function delete(User $authUser, Account $account)
    {
        return false;
    }
}
