<?php

namespace Database\Factories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExpenseCategory>
 */
class ExpenseCategoryFactory extends AbstractFactory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}
