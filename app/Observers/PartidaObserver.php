<?php

namespace App\Observers;

use App\Models\Partida;

use App\Models\Escalao_partida;

use RealRashid\SweetAlert\Facades\Alert;

class PartidaObserver
{
    /**
     * Handle the partida "created" event.
     *
     * @param  \App\Partida  $partida
     * @return void
     */
    public function created(Partida $partida)
    {

        $partida->gravarAssociate($partida);
        Alert::success('Partida', 'Partida cadastrada com sucesso');



    }

    /**
     * Handle the partida "updated" event.
     *
     * @param  \App\Partida  $partida
     * @return void
     */
    public function updated(Partida $partida)
    {
        //
    }

    /**
     * Handle the partida "deleted" event.
     *
     * @param  \App\Partida  $partida
     * @return void
     */
    public function deleted(Partida $partida)
    {
        //
    }

    /**
     * Handle the partida "restored" event.
     *
     * @param  \App\Partida  $partida
     * @return void
     */
    public function restored(Partida $partida)
    {
        //
    }

    /**
     * Handle the partida "force deleted" event.
     *
     * @param  \App\Partida  $partida
     * @return void
     */
    public function forceDeleted(Partida $partida)
    {
        //
    }
}
