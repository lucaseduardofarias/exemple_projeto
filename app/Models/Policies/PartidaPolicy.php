<?php

namespace App\Models\Policies;

use App\Models\User;
use App\Models\Partida;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartidaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any partida.
     *
     * @param  App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the partida.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partida  $partida
     * @return bool
     */
    public function view(User $user, Partida $partida)
    {
        return false;
    }

    /**
     * Determine whether the user can create a partida.
     *
     * @param  App\Models\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the partida.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partida  $partida
     * @return bool
     */
    public function update(User $user, Partida $partida)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the partida.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partida  $partida
     * @return bool
     */
    public function delete(User $user, Partida $partida)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the partida.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partida  $partida
     * @return bool
     */
    public function restore(User $user, Partida $partida)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the partida.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partida  $partida
     * @return bool
     */
    public function forceDelete(User $user, Partida $partida)
    {
        return false;
    }
}
