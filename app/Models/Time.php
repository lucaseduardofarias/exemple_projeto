<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nome', 'idade', 'grupoProfisional'
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
     * Get the Jogadors for the Time.
     */
    public function jogadors()
    {
        return $this->hasMany(\App\Models\Jogador::class);
    }


    /**
     * Get the Partidas for the Time.
     */
    public function partidas()
    {
        return $this->hasMany(\App\Models\Partida::class);
    }


    /**
     * Get the Partidas for the Time.
     */
    public function partidas2()
    {
        return $this->hasMany(\App\Models\Partida::class,'time2_id','id');
    }

}
