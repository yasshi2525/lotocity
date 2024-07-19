<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    private static $DEFAULT_CASH = 100;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'x' => fake()->randomDigit(),
            'y' => fake()->randomDigit(),
            'cash' => self::$DEFAULT_CASH,
        ];
    }
}
