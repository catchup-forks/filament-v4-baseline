<?php

namespace Database\Factories;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'code'         => Str::slug($this->faker->word),
            'name'         => $this->faker->word,
            'price'        => $this->faker->randomFloat(2, 5, 500),
        ];
    }
}
