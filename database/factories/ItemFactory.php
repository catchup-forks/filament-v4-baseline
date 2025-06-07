<?php

namespace Database\Factories;

use App\Models\Franchise;
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
        ];
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
