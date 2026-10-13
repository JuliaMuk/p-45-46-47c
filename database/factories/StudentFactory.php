<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstName(),
            'lastname' =>fake()->lastName(),
            'middlename' => fake()->middleName(),
            'birthday' => fake()->date(),
            'group_id' => Group::inRandomOrder()->first()->id      
        ];
    }
}
