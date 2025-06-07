<?php

namespace Database\Seeders\Financial;

use App\Models\Payment;
use Database\Seeders\AbstractSeeder;

class PaymentSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating {{ model }}', function () {
            Payment::factory()->count(10)->create();
        });
    }
}
