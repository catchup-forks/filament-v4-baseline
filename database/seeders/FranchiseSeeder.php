<?php

namespace Database\Seeders;

use App\Models\Franchise;

class FranchiseSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Seeding Franchises...', function () {
            Franchise::factory()
                ->count(2)
                ->withDefaults()
                ->create();
        });
    }
}
