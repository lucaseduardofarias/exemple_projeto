<?php

namespace App\Models\Policies;

use App\Models\User;
use App\Models\Escalao_partida;
use Illuminate\Auth\Access\HandlesAuthorization;

class Escalao_partidaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any escalaoPartida.
     *
     * @param  App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the escalaoPartida.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Escalao_partida  $escalaoPartida
     * @return bool
     */
    public function view(User $user, Escalao_partida $escalaoPartida)
    {
        return false;
    }

    /**
     * Determine whether the user can create a escalaoPartida.
     *
     * @param  App\Models\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the escalaoPartida.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Escalao_partida  $escalaoPartida
     * @return bool
     */
    public function update(User $user, Escalao_partida $escalaoPartida)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the escalaoPartida.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Escalao_partida  $escalaoPartida
     * @return bool
     */
    public function delete(User $user, Escalao_partida $escalaoPartida)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the escalaoPartida.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Escalao_partida  $escalaoPartida
     * @return bool
     */
    public function restore(User $user, Escalao_partida $escalaoPartida)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the escalaoPartida.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Escalao_partida  $escalaoPartida
     * @return bool
     */
    public function forceDelete(User $user, Escalao_partida $escalaoPartida)
    {
        return false;
    }
}
