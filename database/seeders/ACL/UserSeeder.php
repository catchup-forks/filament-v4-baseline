<?php

namespace Database\Seeders\ACL;

use App\Enums\RolesEnum;
use App\Models\Franchise;
use App\Models\User;
use Database\Seeders\AbstractSeeder;

class UserSeeder extends AbstractSeeder
{
    public function changeRequestSeeder(): void
    {
        $this->progress('Creating Users', function () {
            User::factory()
                ->count(20)
                ->create()
                ->each(function (User $user) {
                    $franchise = Franchise::query()->inRandomOrder()->first();

                    $user->updateQuietly([
                        'franchise_id' => $franchise?->id,
                    ]);
                });
        });
    }

    public function run(): void
    {
        $this->progress('Seeding Users (non-admin roles)...', function () {
            $roles = [
                RolesEnum::ASSISTANCE,
                RolesEnum::USERADMIN,
                RolesEnum::USER,
            ];

            foreach ($roles as $role) {
                User::factory()
                    ->count(3)
                    ->withRole($role->value)
                    ->create();
            }
        });
    }
}
