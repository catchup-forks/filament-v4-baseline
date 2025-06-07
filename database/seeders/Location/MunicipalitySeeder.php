<?php

namespace Database\Seeders\Location;

use App\Models\District;
use App\Models\Municipality;
use App\Models\Province;
use Database\Seeders\AbstractSeeder;

class MunicipalitySeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Municipalities', function () {
            Province::all()->each(function ($province) {
                District::factory(2)
                    ->create(['province_id' => $province->id])
                    ->each(function ($district) {
                        Municipality::factory(3)->create(['district_id' => $district->id]);
                    });
            });
        });
    }
}
