<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class create_officeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_office' => fake()->string(),
            'address' =>fake()->string(),
            'country' =>fake()->string(),
            'amount' =>fake()->intager()
        ];
    }
}
