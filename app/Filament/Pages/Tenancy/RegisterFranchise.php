<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Franchise;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterFranchise extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register franchise';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('slug')->required(),
            ]);
    }

    protected function handleRegistration(array $data): Franchise
    {
        $franchise = Franchise::query()->create($data);

        $franchise->users()->attach(auth()->user());

        return $franchise;
    }
}
