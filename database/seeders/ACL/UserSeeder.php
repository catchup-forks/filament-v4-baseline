<?php

namespace Database\Seeders\ACL;

use App\Enums\RolesEnum;
use App\Models\User;
use Database\Seeders\AbstractSeeder;

class UserSeeder extends AbstractSeeder
{
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
                    ->withRole($role)
                    ->create();
            }
        });
    }
}
