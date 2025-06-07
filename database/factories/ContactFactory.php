<?php

namespace Database\Factories;

use App\Enums\ContactType;
use App\Models\Franchise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'business_id'  => $this->getBusinessId(),
            'name'         => $this->faker->name,
            'type'         => ContactType::CUSTOMER->value, // default type
        ];
    }

    public function lead(): static
    {
        return $this->state(fn () => [
            'type' => ContactType::LEAD->value,
        ]);
    }

    public function prospect(): static
    {
        return $this->state(fn () => [
            'type' => ContactType::PROSPECT->value,
        ]);
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
