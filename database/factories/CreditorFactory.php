<?php

namespace Database\Factories;

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
}
