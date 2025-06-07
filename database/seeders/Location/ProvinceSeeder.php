<?php

namespace Database\Seeders\Location;

use App\Enums\MunicipalityType;
use App\Models\District;
use App\Models\Municipality;
use App\Models\Province;
use Database\Seeders\AbstractSeeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\FranchiseSeeder;
use Database\Seeders\Location\Location\ProvinceServiceSeeder;

class ProvinceSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Seeding Provinces, Districts, Municipalities', function () {
            $districtsByProvince = config('geo.districts');
            $createdProvinces    = [];

            foreach ($districtsByProvince as $provinceName => $districts) {
                $province           = Province::factory()->withName($provinceName)->create();
                $createdProvinces[] = $province;

                foreach ($districts as $districtName => $districtData) {
                    $district = District::factory()
                        ->withProvince($province)
                        ->withName($districtName)
                        ->create();

                    foreach ($districtData['municipality'] as $municipalityName => $type) {
                        $municipality = Municipality::factory()
                            ->withDistrict($district)
                            ->withName($municipalityName)
                            ->withType($type)
                            ->create();

                        if (
                            $type === MunicipalityType::DISTRICT->value &&
                            isset($districtData['children'])
                        ) {
                            foreach ($districtData['children'] as $childName) {
                                Municipality::factory()
                                    ->withDistrict($district)
                                    ->withParent($municipality)
                                    ->withName($childName)
                                    ->withType(MunicipalityType::LOCAL->value)
                                    ->create();
                            }
                        }
                    }
                }
            }

            $this->call([
                LiquorAuthoritySeeder::class,
                FranchiseSeeder::class,
                DepartmentSeeder::class,
                ProvinceServiceSeeder::class,
            ]);
        });
    }
}
