<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Contact;

class ContactSeeder extends AbstractSeeder
{
    public static function prospectAndLeadSeeder(): void
    {
        Business::all()->each(function (Business $business) {
            Contact::factory()
                ->count(1)
                ->for($business)
                ->lead()
                ->create();

            Contact::factory()
                ->count(1)
                ->for($business)
                ->prospect()
                ->create();
        });
    }

    public function run(): void
    {
        $this->progress('Creating Contacts', function () {
            Business::query()->each(function ($business) {
                Contact::factory()->count(2)->create([
                    'business_id' => $business->id,
                ]);
            });
        });
    }
}
