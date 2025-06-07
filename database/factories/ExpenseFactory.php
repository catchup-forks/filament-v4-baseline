<?php

namespace Database\Factories;

use App\Models\Expense;
use App\Models\ExpenseCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends AbstractFactory
{
    protected $model = Expense::class;

    public function definition(): array
    {
        return [
            'franchise_id'        => $this->getFranchiseId(),
            'expense_category_id' => ExpenseCategory::factory(),
            'number'              => mb_strtoupper($this->faker->bothify('EXP-#####')),
            'expensed_at'         => $this->faker->date,
        ];
    }
}
