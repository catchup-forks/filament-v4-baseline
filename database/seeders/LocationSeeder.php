<?php

namespace Database\Seeders;

use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Support\Str;

class LocationSeeder extends AbstractSeeder
{
    public function run(): void
    {
        foreach (config('districts') as $provinceCode => $province) {
            $provinceModel = Province::query()->firstOrCreate([
                'code' => $provinceCode,
            ], [
                'name' => $province['name'] ?? Str::title(str_replace('-', ' ', $provinceCode)),
            ]);

            collect($province['municipalities'] ?? [])->each(function ($municipality) use ($provinceModel) {
                Municipality::query()->firstOrCreate([
                    'district_id' => $provinceModel->id,
                    'name'        => $municipality['name'],
                    'type'        => $municipality['type'],
                ]);
            });
        }
    }
}
