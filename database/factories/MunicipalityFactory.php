<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\Municipality;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Municipality>
 */
class MunicipalityFactory extends AbstractFactory
{
    protected $model = Municipality::class;

    public function definition(): array
    {
        return [
            'name'        => $this->faker->citySuffix,
            'district_id' => District::query()->inRandomOrder()->value('id') ?? District::factory()->create()->id,
        ];
    }

    public function withDistrict(District $district): static
    {
        return $this->state(fn () => ['district_id' => $district->id]);
    }

    public function withParent(Municipality $parent): static
    {
        return $this->state(fn () => ['parent_id' => $parent->id]);
    }

    public function withName(string $name): static
    {
        return $this->state(fn () => ['name' => $name]);
    }

    public function withType(string $type): static
    {
        return $this->state(fn () => ['type' => $type]);
    }
}
