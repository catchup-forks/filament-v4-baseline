<?php

namespace Database\Seeders;

use App\Enums\MunicipalityType;
use App\Models\Franchise;
use App\Models\Municipality;

class FranchiseSeeder extends AbstractSeeder
{
    public static function fromMunicipality(Municipality $municipality): void
    {
        Franchise::factory()
            ->count(1)
            ->create([
                'municipality_id' => $municipality->id,
            ]);
    }

    public function run(): void
    {
        $this->progress('Seeding Franchises...', function () {
            Municipality::query()
                ->whereIn('type', [MunicipalityType::METRO, MunicipalityType::LOCAL])
                ->each(fn ($m) => Franchise::factory()->create(['municipality_id' => $m->id]));
        });
    }
}
