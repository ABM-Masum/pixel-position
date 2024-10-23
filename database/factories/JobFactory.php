<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'description' => fake()->text(),
            'salary' => fake()->randomElement(['50,000 tk', '1,00,000 tk', '1,50,000 tk']),
            'location' => fake()->address(),
            'schedule' => fake()->randomElement(['Full-Time', 'Part Time', 'Temporary']),
            'url' => fake()->url(),
            'featured' => fake()->boolean(),
        ];
    }
}
