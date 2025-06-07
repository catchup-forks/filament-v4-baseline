<?php

namespace Database\Seeders\Location\Location;

use App\Models\Province;
use Database\Seeders\AbstractSeeder;

class ProvinceServiceSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Provinces', function () {
            Province::factory()->count(10)->create();
        });
    }
}
