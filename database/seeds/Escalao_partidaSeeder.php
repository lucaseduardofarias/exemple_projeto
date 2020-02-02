<?php

use App\Escalao_partida;
use Illuminate\Database\Seeder;

class Escalao_partidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Escalao_partida::class, 10)->create();
    }
}