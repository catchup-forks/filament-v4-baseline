<?php

namespace Database\Seeders;

use App\Enums\MunicipalityType;
use App\Enums\RolesEnum;
use App\Models\Franchise;
use App\Models\Municipality;
use App\Models\User;

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
        $this->progress('Seeding Franchises with User associations...', function () {
            $users = User::role(RolesEnum::nonAdmin())->get();

            if (Municipality::query()->whereIn('type', [MunicipalityType::METRO, MunicipalityType::LOCAL])->doesntExist()) {
                $this->command->error('No eligible municipalities found. Make sure LocationSeeder is executed first.');

                return;
            }

            Municipality::query()
                ->whereIn('type', [MunicipalityType::METRO, MunicipalityType::LOCAL])
                ->get()
                ->each(function (Municipality $municipality) use ($users) {
                    $franchises = Franchise::factory()
                        ->count(random_int(1, 2))
                        ->create(['municipality_id' => $municipality->id]);

                    $franchises->each(function (Franchise $franchise) use ($users) {
                        $franchise->users()->attach(
                            $users->random(random_int(1, min(3, $users->count())))->pluck('id')
                        );
                    });
                });
        });
    }
}
