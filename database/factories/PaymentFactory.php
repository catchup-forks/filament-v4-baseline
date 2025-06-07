<?php

namespace Database\Factories;

use App\Models\Franchise;
use App\Models\Invoice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'invoice_id'   => Invoice::factory(),
            'paid_at'      => $this->faker->date,
            'amount'       => $this->faker->randomFloat(2, 100, 1000),
        ];
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
