<?php

namespace Database\Factories;

use App\Models\Bank;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BankAccount>
 */
class BankAccountFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id'   => $this->getFranchiseId(),
            'bank_id'        => Bank::query()->inRandomOrder()->value('id') ?? Bank::factory()->create()->id,
            'account_number' => $this->faker->bankAccountNumber,
            'account_name'   => $this->faker->name,
        ];
    }
}
