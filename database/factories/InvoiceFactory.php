<?php

namespace Database\Factories;

use App\Models\Franchise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'business_id'  => $this->getBusinessId(),
            'number'       => mb_strtoupper($this->faker->bothify('INV-#####')),
            'invoiced_at'  => $this->faker->date,
            'due_at'       => $this->faker->date,
        ];
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
