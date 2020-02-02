<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escalao_partida extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'jogador_id', 'partida_id'
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
     * Get the Jogador for the Escalao_partida.
     */
    public function jogador()
    {
        return $this->belongsTo(\App\Models\Jogador::class);
    }


    /**
     * Get the Partida for the Escalao_partida.
     */
    public function partida()
    {
        return $this->belongsTo(\App\Models\Partida::class);
    }


}
