<?php

namespace Database\Seeders\Financial;

use App\Models\Expense;
use Database\Seeders\AbstractSeeder;

class ExpenseSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Expenses', function () {
            Expense::factory()->count(5)->create();
        });
    }
}
