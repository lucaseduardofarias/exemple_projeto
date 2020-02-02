<?php

namespace App\Models\Policies;

use App\Models\User;
use App\Models\Jogador;
use Illuminate\Auth\Access\HandlesAuthorization;

class JogadorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any jogador.
     *
     * @param  App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the jogador.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Jogador  $jogador
     * @return bool
     */
    public function view(User $user, Jogador $jogador)
    {
        return false;
    }

    /**
     * Determine whether the user can create a jogador.
     *
     * @param  App\Models\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the jogador.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Jogador  $jogador
     * @return bool
     */
    public function update(User $user, Jogador $jogador)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the jogador.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Jogador  $jogador
     * @return bool
     */
    public function delete(User $user, Jogador $jogador)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the jogador.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Jogador  $jogador
     * @return bool
     */
    public function restore(User $user, Jogador $jogador)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the jogador.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Jogador  $jogador
     * @return bool
     */
    public function forceDelete(User $user, Jogador $jogador)
    {
        return false;
    }
}
