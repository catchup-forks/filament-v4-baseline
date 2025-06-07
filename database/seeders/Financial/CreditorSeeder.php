<?php

namespace Database\Seeders\Financial;

use App\Models\Creditor;
use Database\Seeders\AbstractSeeder;

class CreditorSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Creditors', function () {
            Creditor::factory(10)->create();
        });
    }
}
