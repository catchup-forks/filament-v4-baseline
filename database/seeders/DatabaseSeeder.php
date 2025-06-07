<?php

namespace Database\Seeders;

use Database\Seeders\ACL\OwnerSeeder;
use Database\Seeders\ACL\RolesAndPermissionsSeeder;
use Database\Seeders\ACL\RoleSeeder;
use Database\Seeders\ACL\UserSeeder;
use Database\Seeders\Financial\InvoiceSeeder;
use Database\Seeders\Financial\QuoteSeeder;
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

        // Core Setup
        $this->call([
            UserSeeder::class,
            BusinessSeeder::class,
            ContactSeeder::class,
            ItemSeeder::class,
            FranchiseSeeder::class, // Triggers departments + admin user creation via withDefaults()
            QuoteSeeder::class,
            InvoiceSeeder::class,
            FinanceSeeder::class,
            LocationSeeder::class,
        ]);

        // Post-seeding cross-relations
        //(new ItemSeeder())->seedBusinessItems();
        //(new UserSeeder())->changeRequestSeeder();
        ContactSeeder::prospectAndLeadSeeder();

        // Final Owner-only setups
        $this->call([
            OwnerSeeder::class,
        ]);
    }
}
