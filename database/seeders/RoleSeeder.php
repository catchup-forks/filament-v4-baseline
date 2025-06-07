<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;

class RoleSeeder extends AbstractSeeder
{
    public function run(): void
    {
        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'useradmin']);
        Role::create(['name' => 'assistance']);
        Role::create(['name' => 'user']);
    }
}
