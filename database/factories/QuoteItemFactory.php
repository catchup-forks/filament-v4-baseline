<?php

namespace Database\Factories;

use App\Models\Franchise;
use App\Models\Item;
use App\Models\Quote;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuoteItem>
 */
class QuoteItemFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'quote_id'     => Quote::factory(),
            'item_id'      => Item::factory(),
            'quantity'     => $this->faker->randomFloat(2, 1, 10),
            'price'        => $this->faker->randomFloat(2, 50, 500),
        ];
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
