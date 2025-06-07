<?php

namespace Database\Factories;

use App\Models\Business;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'business_id'  => Business::factory(),
            'number'       => mb_strtoupper($this->faker->bothify('INV-#####')),
            'invoiced_at'  => $this->faker->date,
            'due_date'     => $this->faker->date,
        ];
    }
}
