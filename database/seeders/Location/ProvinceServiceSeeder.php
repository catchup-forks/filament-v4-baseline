<?php

namespace Database\Seeders\Location\Location;

use App\Models\Province;
use App\Models\ProvinceService;
use Database\Seeders\AbstractSeeder;

class ProvinceServiceSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Provinces', function () {
            Province::all()->each(
                fn ($province) => ProvinceService::factory(3)->withProvince($province)->create()
            );
        });
    }
}
