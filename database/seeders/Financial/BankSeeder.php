<?php

namespace Database\Seeders\Financial;

use App\Models\Bank;
use Database\Seeders\AbstractSeeder;

class BankSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Banks', function () {
            Bank::factory(10)->create();
        });
    }
}
