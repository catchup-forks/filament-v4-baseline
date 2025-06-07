<?php

namespace Database\Factories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bank>
 */
class BankFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'code' => $this->faker->bothify('BANK###'),
            'name' => $this->faker->company . ' Bank',
        ];
    }
}
