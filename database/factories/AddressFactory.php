<?php

namespace Database\Factories;

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
}
