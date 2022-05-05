<?php

namespace Database\Factories;

use App\Models\Pokemon;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TrainerPokemons;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainerPokemons>
 */
class TrainerPokemonsFactory extends Factory
{

    protected $model = TrainerPokemons::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            'trainer_id' => function(){
                return Trainer::factory()->create()->id;
            },
            'pokemon_id' => function(){
                return Pokemon::factory()->create()->id;
            },
        ];
    }
}
