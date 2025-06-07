<?php

namespace Database\Seeders;

use App\Models\Business;

class BusinessSeeder extends AbstractSeeder
{
    public function run(): void
    {
        /*
         * This triggers Contact::factory() inside BusinessFactory::withDefaults()
         */
        $this->progress('Seeding Businesses...', function () {
            Business::factory()
                ->count(5)
                ->withDefaults()
                ->create();
        });
    }
}
