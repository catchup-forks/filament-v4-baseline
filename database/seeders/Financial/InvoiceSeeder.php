<?php

namespace Database\Seeders\Financial;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use Database\Seeders\AbstractSeeder;

class InvoiceSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Invoices', function () {
            Invoice::factory()
                ->count(10)
                ->create()
                ->each(
                    fn ($invoice) => InvoiceItem::factory()
                        ->count(3)
                        ->for($invoice)
                        ->create()
                );
        });
    }
}
