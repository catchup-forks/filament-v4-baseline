<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Contact;

class ContactSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating {{ model }}', function () {
            Business::query()->each(function ($business) {
                Contact::factory()->count(2)->create([
                    'business_id' => $business->id,
                ]);
            });
        });
    }
}
