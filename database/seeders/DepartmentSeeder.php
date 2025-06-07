<?php

namespace Database\Seeders;

use App\Models\Department;

class DepartmentSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Departments', function () {
            Department::factory(10)->create();
        });
    }
}
