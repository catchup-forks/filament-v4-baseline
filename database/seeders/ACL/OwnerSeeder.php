<?php

namespace Database\Seeders\ACL;

use App\Models\User;
use Database\Seeders\AbstractSeeder;

class OwnerSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Owner', function () {
            User::factory()->create([
                'email' => 'a@a.com',
                'name'  => 'Owner',
            ])->assignRole('superadmin');
        });
    }
}
