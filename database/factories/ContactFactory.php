<?php

namespace Database\Factories;

use App\Models\Business;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'business_id'  => Business::query()->inRandomOrder()->value('id') ?? Business::factory()->create()->id,
            'name'         => $this->faker->name,
        ];
    }
}
