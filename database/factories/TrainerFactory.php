<?php

namespace Database\Factories;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;
class TrainerFactory extends Factory
{

    protected $model = Trainer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
    public function definition()
    {
        return [
            'username' => $this->faker->name(),
            'region' => $this->faker->city(),
            'age' => $this->faker->numberBetween(1, 99),
        ];
    }
}
