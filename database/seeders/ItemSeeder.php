<?php

namespace Database\Seeders;

use App\Models\Item;

class ItemSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Items', function () {
            Item::factory()->count(20)->create();
        });
    }
}
