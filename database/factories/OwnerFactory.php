<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'display_name' => fake()->unique()->name(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function(Owner $owner) {
            Company::factory()->for($owner)->create();
        });
    }
}
