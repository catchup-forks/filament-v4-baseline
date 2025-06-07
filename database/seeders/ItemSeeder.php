<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Item;

class ItemSeeder extends AbstractSeeder
{
    public function seedBusinessItems(): void
    {
        $this->progress('Creating Items', function () {
            Business::all()->each(function (Business $business) {
                Item::factory()
                    ->count(3)
                    ->for($business)
                    ->create();
            });
        });
    }

    public function run(): void
    {
        $this->progress('Creating Items', function () {
            Item::factory()->count(20)->create();
        });
    }
}
