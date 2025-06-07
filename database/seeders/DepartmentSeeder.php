<?php

namespace Database\Seeders;

use App\Enums\DepartmentType;
use App\Models\Department;
use App\Models\Franchise;

class DepartmentSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Provinces', function () {
            $types = DepartmentType::cases();

            Franchise::all()->each(function ($franchise) use ($types) {
                Department::factory()->create([
                    'franchise_id'    => $franchise->id,
                    'department_type' => $types[array_rand($types)]->value,
                ]);
            });
        });
    }
}
