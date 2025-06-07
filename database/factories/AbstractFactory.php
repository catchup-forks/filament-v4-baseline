<?php

namespace Database\Factories;

use App\Enums\DepartmentType;
use App\Models\Business;
use App\Models\Department;
use App\Models\Franchise;
use App\Models\Province;
use App\Models\User;
use Database\Seeders\Location\DistrictSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

abstract class AbstractFactory extends Factory
{
    public function configure(): static
    {
        return $this->afterCreating(fn ($model) => $this->afterCreated($model));
    }

    public function withDefaults(): static
    {
        return $this->afterCreating(function ($franchise) {
            collect(DepartmentType::cases())->each(function ($type) use ($franchise) {
                Department::factory()
                    ->for($franchise)
                    ->create(['type' => $type->value]);
            });

            collect([
                'useradmin',
                'user',
            ])->each(function ($role) use ($franchise) {
                User::factory()->count(2)->create([
                    'franchise_id' => $franchise->id,
                ])->each(fn ($user) => $user->assignRole($role));
            });
        });
    }

    public function withDistricts(): static
    {
        return $this->afterCreating(function (Province $province) {
            DistrictSeeder::fromProvince($province);
        });
    }

    protected function getBusinessId(): int
    {
        return Business::query()->inRandomOrder()->value('id') ?? Business::factory()->create()->id;
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id') ?? Franchise::factory()->create()->id;
    }

    protected function afterCreated($model): void
    {
        // Optional override in child factories
    }
}
