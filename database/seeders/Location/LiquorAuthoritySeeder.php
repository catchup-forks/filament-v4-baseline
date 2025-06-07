<?php

namespace Database\Seeders\Location;

use App\Models\LiquorAuthority;
use App\Models\Province;
use Database\Seeders\AbstractSeeder;

class LiquorAuthoritySeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Liquor Authorities', function () {
            Province::all()->each(function ($province) {
                LiquorAuthority::factory()->create(['province_id' => $province->id]);
            });
        });
    }
}
