<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(TimeSeeder::class);
        // $this->call(PartidaSeeder::class);
        $this->call(JogadorSeeder::class);
        //$this->call(Escalao_partidaSeeder::class);
    }
}
