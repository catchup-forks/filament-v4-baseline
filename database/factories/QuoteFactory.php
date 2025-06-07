<?php

namespace Database\Factories;

use App\Models\Franchise;
use App\Models\Quote;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends AbstractFactory
{
    protected $model = Quote::class;

    public function definition(): array
    {
        return [
            'franchise_id' => $this->getFranchiseId(),
            'business_id'  => $this->getBusinessId(),
            'number'       => mb_strtoupper($this->faker->bothify('QUO-#####')),
            'quoted_at'    => $this->faker->date,
            'expires_at'   => $this->faker->date,
        ];
    }

    protected function getFranchiseId(): int
    {
        return Franchise::query()->inRandomOrder()->value('id');
    }
}
