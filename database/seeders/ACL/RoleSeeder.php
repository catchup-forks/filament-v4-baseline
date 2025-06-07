<?php

namespace Database\Seeders\ACL;

use App\Enums\RolesEnum;
use Database\Seeders\AbstractSeeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Roles', function () {
            foreach (RolesEnum::cases() as $role) {
                Role::query()->firstOrCreate(['name' => $role->value]);
            }
        });
    }
}
