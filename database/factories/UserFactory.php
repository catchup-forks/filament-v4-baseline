<?php

namespace Database\Factories;

use App\Models\Franchise;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends AbstractFactory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'name'              => fake()->name(),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => static::$password ??= Hash::make('password'),
            'remember_token'    => Str::random(10),
        ];
    }

    public function withRole(string $role): static
    {
        return $this->afterCreating(function (User $user) use ($role) {
            $user->assignRole($role);
        });
    }

    public function withRoles(array $roles): static
    {
        return $this->afterCreating(function (User $user) use ($roles) {
            $user->syncRoles($roles);
        });
    }

    public function forFranchise(Franchise $franchise): static
    {
        return $this->state([
            'franchise_id' => $franchise->id,
        ]);
    }
}
