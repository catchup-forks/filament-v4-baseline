<?php

namespace Database\Seeders\Location;

use App\Models\District;
use App\Models\Province;
use Database\Seeders\AbstractSeeder;

class DistrictSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Districts', function () {
            Province::query()->each(function ($province) {
                District::factory()->count(3)->create([
                    'province_id' => $province->id,
                ]);
            });
        });
    }
}
