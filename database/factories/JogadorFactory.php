<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Jogador;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Jogador::class, function (Faker $faker) {

    return [
        'nome' => $faker->name,
        'idade' => random_int(18, 50),
        'posicao_atleta' => $faker->randomElement(['Lateral', 'Lateral direito','Lateral esquerdo', 'Zagueiro','Meia, meio-campista', 'Volante','Armador','Goleiro','Ataque']),
        'cidade_nascimento' => $faker->randomElement(['Rio de Janeiro', 'Porto Alegre','Sao Leopoldo', 'São Paulo','Mato Grosso', 'Gramado']),
        'numeroAtleta' => random_int(0, 150),
        'time_id' => 12
    ];
});
