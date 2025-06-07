<?php

namespace Database\Seeders\Location;

use App\Models\District;
use App\Models\Province;
use Database\Seeders\AbstractSeeder;
use Illuminate\Support\Facades\App;

class DistrictSeeder extends AbstractSeeder
{
    public static function fromProvince(Province $province): void
    {
        $instance = App::make(static::class);
        $instance->seed($province);
    }

    public function seed(Province $province): void
    {
        $this->progress('Creating Districts', function () use ($province) {
            $districts = config('seed-data.districts')[$province->name] ?? [];

            foreach ($districts as $districtData) {
                $district = District::create([
                    'province_id' => $province->id,
                    'name'        => $districtData['name'],
                ]);

                MunicipalitySeeder::fromDistrict($district, $districtData['municipality']);
            }

            LiquorAuthoritySeeder::fromProvince($province);
        });
    }
}
