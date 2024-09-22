<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(InvoiceDetailSeeder::class);
    }
}
