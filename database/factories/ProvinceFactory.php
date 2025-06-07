<?php

namespace Database\Factories;

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
}
