<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $controls = ['зачет','диф зачет','экзамен'];
        return [
            'title' => fake()->word(),
            'hours' => fake()->numberBetween(32, 200),
            'type_control'=> fake()->randomElement($controls)
        ];
    }
}
