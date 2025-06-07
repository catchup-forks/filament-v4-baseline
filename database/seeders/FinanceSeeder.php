<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\BankAccount;
use App\Models\Creditor;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\Payment;

class FinanceSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Finance Records', function () {
            Bank::factory(5)->create();
            BankAccount::factory(15)->create();
            Creditor::factory(10)->create();
            ExpenseCategory::factory(6)->create();
            Expense::factory(20)->create();
            Payment::factory(10)->create();
        });
    }
}
