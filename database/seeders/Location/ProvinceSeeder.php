<?php

namespace Database\Seeders\Location;

use App\Models\District;
use App\Models\Municipality;
use Database\Seeders\AbstractSeeder;

class ProvinceSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Municipalities', function () {
            District::query()->each(function ($district) {
                Municipality::factory()->count(2)->create([
                    'district_id' => $district->id,
                ]);
            });
        });
    }
}
