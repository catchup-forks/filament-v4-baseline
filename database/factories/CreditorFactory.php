<?php

namespace Database\Factories;

use App\Models\Franchise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Creditor>
 */
class CreditorFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'name'         => $this->faker->company,
        ];
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
