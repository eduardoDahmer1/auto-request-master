<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\Site;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SitePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array($user->role_id, [Role::IS_ADMIN, Role::IS_SUPPORT]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [Role::IS_ADMIN, Role::IS_SUPPORT]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [Role::IS_ADMIN, Role::IS_SUPPORT]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function changeStatus(User $user)
    {
        return in_array($user->role_id, [Role::IS_ADMIN, Role::IS_SUPPORT, Role::IS_FINANCES]);
    }
}
