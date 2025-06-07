<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Business;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addressable>
 */
class AddressableFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'address_id'       => Address::factory(),
            'addressable_type' => Business::class,
            'addressable_id'   => Business::factory(),
        ];
    }
}
