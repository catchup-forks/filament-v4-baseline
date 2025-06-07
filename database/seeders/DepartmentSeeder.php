<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Franchise;

class DepartmentSeeder extends AbstractSeeder
{
    public function run(): void
    {
        if (DepartmentType::count() === 0) {
            collect(['Sales', 'Support', 'Management'])->each(
                fn ($name) => DepartmentType::factory()->create(['name' => $name])
            );
        }

        $typeIds = DepartmentType::pluck('id')->all();

        Franchise::all()->each(
            fn ($franchise) => Department::factory()->create([
                'franchise_id'       => $franchise->id,
                'department_type_id' => $typeIds[array_rand($typeIds)],
            ])
        );
    }
}
