<?php

namespace App\Models;

use App\Models\Jogador;
use App\Models\Escalao_partida;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'dataPartida', 'time_id', 'time2_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    /**
     * Get the Escalao_partidas for the Partida.
     */
    public function escalaoPartidas()
    {
        return $this->hasMany(\App\Models\Escalao_partida::class);
    }


    /**
     * Get the Time for the Partida.
     */
    public function time()
    {
        return $this->belongsTo(\App\Models\Time::class);
    }
    /**
     * Get the Time for the Partida.
     */
    public function time2()
    {
        return $this->belongsTo(\App\Models\Time::class,'time2_id','id');
    }


    public function gravarAssociate(Partida $partida){

        $jogadores = Jogador::select('id')->whereIn('time_id',[$partida->time_id,$partida->time2_id])->inRandomOrder()->limit(22)->distinct(['posicao_atleta'])->get();

        foreach ($jogadores as $jogador) {
            $partidaTeste = new Escalao_partida ;
            $partidaTeste->jogador_id = $jogador->id;
            $partidaTeste->partida_id = $partida->id;
            $partidaTeste->save();
        }

    }
}
