<?php

namespace Database\Seeders\Location;

use App\Models\LiquorAuthority;
use App\Models\Province;
use Database\Seeders\AbstractSeeder;

class LiquorAuthoritySeeder extends AbstractSeeder
{
    public static function fromProvince(Province $province): void
    {
        LiquorAuthority::factory()
            ->withProvince($province)
            ->count(1)
            ->create();
    }

    public function run(): void
    {
        $this->progress('Creating Liquor Authorities', function () {
            Province::all()->each(
                fn ($province) => LiquorAuthority::factory()->withProvince($province)->create()
            );
        });
    }
}
