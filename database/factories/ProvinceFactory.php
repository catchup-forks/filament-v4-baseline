<?php

namespace Database\Factories;

use App\Models\Province;
use Database\Seeders\Location\DistrictSeeder;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Province>
 */
class ProvinceFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->state,
        ];
    }

    public function withName(string $name): static
    {
        return $this->state(fn () => ['name' => $name]);
    }

    public function withDistricts(): static
    {
        return $this->afterCreating(function (Province $province) {
            DistrictSeeder::fromProvince($province);
        });
    }
}
