<?php

namespace Database\Factories;

use App\Models\Franchise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'address_1'    => $this->faker->streetAddress,
            'address_2'    => $this->faker->secondaryAddress,
            'postal_code'  => $this->faker->postcode,
            'city'         => $this->faker->city,
        ];
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
