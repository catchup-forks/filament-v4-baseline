<?php

namespace Database\Seeders;

use App\Enums\DepartmentType;
use App\Enums\MunicipalityType;
use App\Models\Department;
use App\Models\District;
use App\Models\Franchise;
use App\Models\LiquorAuthority;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\ProvinceService;

class LocationSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $districtsByProvince = config('districts');

        $createdProvinces  = collect();
        $createdFranchises = collect();

        foreach ($districtsByProvince as $provinceName => $provinceData) {
            $province = Province::factory()->create([
                'name' => $provinceName,
            ]);
            $createdProvinces->push($province);

            foreach ($provinceData['districts'] as $districtData) {
                $district = District::factory()->create([
                    'name'        => $districtData['name'],
                    'code'        => $districtData['code'],
                    'province_id' => $province->id,
                ]);

                foreach ($districtData['municipality'] as $municipalityData) {
                    $municipality = Municipality::factory()->create([
                        'district_id' => $district->id,
                        'name'        => $municipalityData['name'],
                        'type'        => MunicipalityType::from($municipalityData['type']),
                    ]);

                    if ($municipalityData['type'] === MunicipalityType::DISTRICT->value) {
                        foreach ($municipalityData['children'] as $childData) {
                            Municipality::factory()->create([
                                'district_id' => $district->id,
                                'parent_id'   => $municipality->id,
                                'name'        => $childData['name'],
                                'type'        => MunicipalityType::LOCAL,
                            ]);
                        }
                    }
                }
            }
        }

        $createdProvinces->each(function (Province $province) {
            LiquorAuthority::factory()->create([
                'province_id' => $province->id,
            ]);

            ProvinceService::factory()
                ->count(random_int(1, 3))
                ->create(['province_id' => $province->id]);
        });

        Municipality::query()
            ->whereIn('type', [MunicipalityType::LOCAL, MunicipalityType::METRO])
            ->get()
            ->each(function (Municipality $municipality) use ($createdFranchises) {
                $franchises = Franchise::factory()
                    ->count(random_int(1, 3))
                    ->create([
                        'municipality_id' => $municipality->id,
                    ]);

                $createdFranchises->push(...$franchises);
            });

        $createdFranchises->each(function (Franchise $franchise) {
            Department::factory()
                ->count(random_int(1, 3))
                ->create([
                    'franchise_id'    => $franchise->id,
                    'department_type' => DepartmentType::cases()[array_rand(DepartmentType::cases())],
                ]);
        });
    }
}
