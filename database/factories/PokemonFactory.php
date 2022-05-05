<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pokemon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class PokemonFactory extends Factory
{

    protected $model = Pokemon::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'image_url' => $this->faker->city(),
            'attribute' => $this->faker->country(),
        ];
    }
}
