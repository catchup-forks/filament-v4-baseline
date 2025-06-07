<?php

namespace Database\Seeders\ACL;

use Database\Seeders\AbstractSeeder;

class OwnerSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating {{ model }}', function () {
            // {{ fill the model name here model }}::factory(10)->create();
        });
    }
}
