<?php

namespace Database\Factories;

use App\Enums\DepartmentType;
use App\Models\Franchise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'name'         => fake()->company,
            'type'         => fake()->randomElement(DepartmentType::values()),
        ];
    }

    public function withFranchise(Franchise $franchise): static
    {
        return $this->for($franchise);
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
