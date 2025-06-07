<?php

namespace Database\Seeders;

use App\Models\Franchise;

class FranchiseSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating {{ model }}', function () {
            Franchise::factory(10)->create();
        });
    }
}
