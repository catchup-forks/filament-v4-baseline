<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\Province;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\District>
 */
class DistrictFactory extends AbstractFactory
{
    protected $model = District::class;

    public function definition(): array
    {
        return [
            'name'        => $this->faker->city,
            'province_id' => Province::query()->inRandomOrder()->value('id') ?? Province::factory()->create()->id,
        ];
    }

    public function withName(string $name): static
    {
        return $this->state(fn () => ['name' => $name]);
    }
}
