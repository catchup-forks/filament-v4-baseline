<?php

namespace Database\Seeders\Financial;

use App\Models\Quote;
use App\Models\QuoteItem;
use Database\Seeders\AbstractSeeder;

class QuoteSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Creating Quotes', function () {
            Quote::factory()
                ->count(10)
                ->create()
                ->each(
                    fn ($quote) => QuoteItem::factory()
                        ->count(3)
                        ->for($quote)
                        ->create()
                );
        });
    }
}
