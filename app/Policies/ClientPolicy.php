<?php

namespace App\Policies;

use App\User;
use App\Client;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can index the Client.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function index(User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the user can view the Client.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function view(User $authUser, Client $client)
    {
        return true;
    }

    /**
     * Determine whether the user can create Client.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function create(User $authUser)
    {
        return true;
    }

    /**
     * Determine whether the user can show the Client.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function show(User $authUser, Client $client)
    {
        return true;
    }

    /**
     * Determine whether the user can update the Client.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function update(User $authUser, Client $client)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the Client.
     *
     * @param  \App\User $authUser
     * @return mixed
     */
    public function delete(User $authUser, Client $client)
    {
        return false;
    }
}
