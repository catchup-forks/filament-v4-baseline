<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Item;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItem>
 */
class InvoiceItemFactory extends AbstractFactory
{
    protected $model = InvoiceItem::class;

    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'invoice_id'   => Invoice::factory(),
            'item_id'      => Item::factory(),
            'quantity'     => $this->faker->randomFloat(2, 1, 10),
            'price'        => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
