<?php

namespace Database\Factories;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Franchise>
 */
class FranchiseFactory extends AbstractFactory
{
    public function definition(): array
    {
        $companyName = $this->faker->company();

        return [
            'code' => mb_strtoupper($this->faker->bothify('FR###')),
            'name' => $companyName,
            'slug' => Str::slug(mb_strtolower($companyName)),
        ];
    }
}
