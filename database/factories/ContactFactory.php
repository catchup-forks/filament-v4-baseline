<?php

namespace Database\Factories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'business_id'  => $this->getBusinessId(),
            'name'         => $this->faker->name,
        ];
    }
}
