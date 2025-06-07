<?php

namespace Database\Factories;

use App\Models\Creditor;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\Franchise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends AbstractFactory
{
    protected $model = Expense::class;

    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'creditor_id'  => Creditor::factory(),
            'category_id'  => ExpenseCategory::factory(),
            'number'       => mb_strtoupper($this->faker->bothify('EXP-#####')),
            'expensed_at'  => $this->faker->date,
        ];
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
