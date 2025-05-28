<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name'              => fake()->name,
            'email'             => fake()->safeEmail,
            'email_verified_at' => fake()->optional()->datetime(),
            'password'          => bcrypt(fake()->password),
            'remember_token'    => Str::random(10),
        ];
    }
}
