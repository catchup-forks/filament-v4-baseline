<?php

namespace Database\Seeders\Financial;

use App\Models\Bank;
use App\Models\BankAccount;
use Database\Seeders\AbstractSeeder;

class BankAccountSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Bank Accounts', function () {
            Bank::all()->each(function ($bank) {
                BankAccount::factory(3)->create([
                    'bank_id' => $bank->id,
                ]);
            });
        });
    }
}
