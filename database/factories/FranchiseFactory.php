<?php

namespace Database\Factories;

use App\Models\Franchise;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Franchise>
 */
class FranchiseFactory extends AbstractFactory
{
    public function definition(): array
    {
        $companyName = $this->faker->company();

        return [
            'code' => mb_strtoupper($this->faker->bothify('FR###')),
            'name' => $companyName,
            'slug' => Str::slug(mb_strtolower($companyName)),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Franchise $franchise) {
            // Create related models here
            // Example:
            // RelatedModel::factory()->count(3)->create(['franchise_id' => $franchise->id]);
        });
    }
}
