<?php

namespace Database\Seeders\Location;

use App\Models\Province;
use Database\Seeders\AbstractSeeder;

class ProvinceSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Seeding Provinces, Districts, Municipalities', function () {
            Province::factory()
                ->count(9)
                ->withDistricts()
                ->create();
        });
    }
}
