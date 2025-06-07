<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Business;

class AddressableSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Address Information', function () {
            Business::query()->each(function ($business) {
                Address::factory()->create([
                    'addressable_id'   => $business->id,
                    'addressable_type' => Business::class,
                ]);
            });
        });
    }
}
