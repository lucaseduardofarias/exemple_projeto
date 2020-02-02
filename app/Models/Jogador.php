<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nome', 'idade', 'posicao_atleta', 'cidade_nascimento', 'numeroAtleta', 'time_id'
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
     * Get the Escalao_partidas for the Jogador.
     */
    public function escalaoPartidas()
    {
        return $this->hasMany(\App\Models\Escalao_partida::class);
    }


    /**
     * Get the Time for the Jogador.
     */
    public function time()
    {
        return $this->belongsTo(\App\Models\Time::class);
    }

}
