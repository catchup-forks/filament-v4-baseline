<?php

namespace Database\Factories;

use App\Models\Province;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LiquorAuthority>
 */
class LiquorAuthorityFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
        ];
    }

    public function withProvince(Province $province): static
    {
        return $this->state(fn () => ['province_id' => $province->id]);
    }
}
