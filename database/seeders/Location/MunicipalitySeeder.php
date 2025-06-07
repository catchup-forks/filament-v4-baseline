<?php

namespace Database\Seeders\Location;

use App\Enums\MunicipalityType;
use App\Models\Franchise;
use App\Models\Municipality;
use Database\Seeders\AbstractSeeder;

class MunicipalitySeeder extends AbstractSeeder
{
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
}
