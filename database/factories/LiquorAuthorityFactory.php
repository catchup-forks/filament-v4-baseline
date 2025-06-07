<?php

namespace Database\Factories;

use App\Models\LiquorAuthority;
use App\Models\Province;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LiquorAuthority>
 */
class LiquorAuthorityFactory extends AbstractFactory
{
    protected $model = LiquorAuthority::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company . ' Liquor Authority',
        ];
    }

    public function withProvince(Province $province): static
    {
        return $this->state(fn () => ['province_id' => $province->id]);
    }
}
