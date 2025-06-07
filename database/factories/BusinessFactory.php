<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Contact;
use App\Models\Franchise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'name'         => $this->faker->company,
        ];
    }

    public function withDefaults(): static
    {
        return $this->afterCreating(function (Business $business) {
            Contact::factory()->create([
                'business_id' => $business->id,
            ]);
        });
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
