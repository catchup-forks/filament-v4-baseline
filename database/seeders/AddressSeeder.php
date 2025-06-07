<?php

namespace Database\Seeders;

use App\Models\Address;

class AddressSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Addresses', function () {
            Address::factory()->count(30)->create();
        });
    }
}
