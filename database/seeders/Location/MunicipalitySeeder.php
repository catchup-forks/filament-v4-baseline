<?php

namespace Database\Seeders\Location;

use App\Enums\MunicipalityType;
use App\Models\District;
use App\Models\Franchise;
use App\Models\Municipality;
use Database\Seeders\AbstractSeeder;
use Database\Seeders\FranchiseSeeder;

class MunicipalitySeeder extends AbstractSeeder
{
    public static function fromDistrict(District $district, array $municipalityData): void
    {
        foreach ($municipalityData as $municipality) {
            $type              = $municipality['type']; // 'Metropolitan' or 'District'
            $municipalityModel = Municipality::create([
                'district_id' => $district->id,
                'name'        => $municipality['name'],
                'type'        => $type,
            ]);

            // If this district-level municipality has children
            foreach ($municipality['children'] ?? [] as $local) {
                $localMunicipality = Municipality::create([
                    'district_id' => $district->id,
                    'parent_id'   => $municipalityModel->id,
                    'name'        => $local['name'],
                    'type'        => 'Local',
                ]);

                FranchiseSeeder::fromMunicipality($localMunicipality);
            }

            // If it's Metropolitan, create franchise directly
            if ($type === 'Metropolitan') {
                FranchiseSeeder::fromMunicipality($municipalityModel);
            }
        }
    }

    public function run(): void
    {
        $this->progress('Creating Municipalities', function () {
            Municipality::query()
                ->whereIn('type', [MunicipalityType::LOCAL->value, MunicipalityType::METRO->value])
                ->get()
                ->each(
                    fn ($municipality) => Franchise::factory()->withMunicipality($municipality)->create()
                );
        });
    }

    public function seed(District $district, array $data): void
    {
        foreach ($data['municipality'] as $name => $type) {
            $municipality = Municipality::factory()->create([
                'district_id' => $district->id,
                'parent_id'   => null,
                'name'        => $name,
                'type'        => $type,
            ]);

            if ($type === MunicipalityType::DISTRICT->value && isset($data['children'])) {
                foreach ($data['children'] as $childName) {
                    Municipality::factory()->create([
                        'district_id' => $district->id,
                        'parent_id'   => $municipality->id,
                        'name'        => $childName,
                        'type'        => MunicipalityType::LOCAL->value,
                    ]);
                }
            }
        }
    }
}
