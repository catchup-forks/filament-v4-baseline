<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

abstract class AbstractSeeder extends Seeder
{
    protected function progress(string $label, callable $callback): void
    {
        $this->command->info($label);
        $bar = $this->command->getOutput()->createProgressBar();
        $bar->start();
        $callback();
        $bar->finish();
        $this->command->newLine(2);
    }
}
