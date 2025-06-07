<?php

namespace Database\Factories;

use App\Models\Province;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProvinceService>
 */
class ProvinceServiceFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'province_id'  => Province::factory(),
            'name'         => $this->faker->word,
        ];
    }
}
