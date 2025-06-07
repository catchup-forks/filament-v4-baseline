<?php

namespace Database\Seeders;

use Database\Seeders\ACL\OwnerSeeder;
use Database\Seeders\ACL\RolesAndPermissionsSeeder;
use Database\Seeders\ACL\RoleSeeder;
use Database\Seeders\ACL\UserSeeder;
use Database\Seeders\Financial\BankAccountSeeder;
use Database\Seeders\Financial\BankSeeder;
use Database\Seeders\Financial\CreditorSeeder;
use Database\Seeders\Financial\ExpenseCategorySeeder;
use Database\Seeders\Financial\ExpenseSeeder;
use Database\Seeders\Financial\InvoiceItemSeeder;
use Database\Seeders\Financial\InvoiceSeeder;
use Database\Seeders\Financial\PaymentSeeder;
use Database\Seeders\Financial\QuoteItemSeeder;
use Database\Seeders\Financial\QuoteSeeder;
use Database\Seeders\Location\LiquorAuthoritySeeder;
use Database\Seeders\Location\Location\ProvinceServiceSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Access control
        $this->call([
            RoleSeeder::class,
            RolesAndPermissionsSeeder::class,
        ]);

        // Franchise
        $this->call([
            FranchiseSeeder::class, // Triggers departments + admin user creation via withDefaults()
        ]);

        // Franchise-Scoped Data
        $this->call([
            LiquorAuthoritySeeder::class,
            ProvinceServiceSeeder::class,
            DepartmentSeeder::class,
            UserSeeder::class,
            BusinessSeeder::class,
            ContactSeeder::class,
            CreditorSeeder::class,
            BankSeeder::class,
            BankAccountSeeder::class,
            ExpenseCategorySeeder::class,
            ExpenseSeeder::class,
            ItemSeeder::class,
            QuoteSeeder::class,
            QuoteItemSeeder::class,
            InvoiceSeeder::class,
            InvoiceItemSeeder::class,
            PaymentSeeder::class,
            AddressSeeder::class,
            AddressableSeeder::class,
        ]);

        // Owner-only
        $this->call([
            OwnerSeeder::class,
        ]);
    }
}
