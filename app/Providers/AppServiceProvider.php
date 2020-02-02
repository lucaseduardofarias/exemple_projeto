<?php

namespace App\Providers;

use App\Models\Time;
use App\Models\Partida;
use App\Observers\TimeObserver;
use App\Observers\PartidaObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Partida::observe(PartidaObserver::class);
    }
}
