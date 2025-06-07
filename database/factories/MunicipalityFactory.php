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
}
