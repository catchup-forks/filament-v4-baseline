<?php

namespace Database\Seeders\Financial;

use App\Models\ExpenseCategory;
use Database\Seeders\AbstractSeeder;

class ExpenseCategorySeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Expense Categories', function () {
            ExpenseCategory::factory(6)->create();
        });
    }
}
