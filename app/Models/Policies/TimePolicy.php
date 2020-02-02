<?php

namespace App\Models\Policies;

use App\Models\User;
use App\Models\Time;
use Illuminate\Auth\Access\HandlesAuthorization;

class TimePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any time.
     *
     * @param  App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the time.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Time  $time
     * @return bool
     */
    public function view(User $user, Time $time)
    {
        return false;
    }

    /**
     * Determine whether the user can create a time.
     *
     * @param  App\Models\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the time.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Time  $time
     * @return bool
     */
    public function update(User $user, Time $time)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the time.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Time  $time
     * @return bool
     */
    public function delete(User $user, Time $time)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the time.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Time  $time
     * @return bool
     */
    public function restore(User $user, Time $time)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the time.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Time  $time
     * @return bool
     */
    public function forceDelete(User $user, Time $time)
    {
        return false;
    }
}
