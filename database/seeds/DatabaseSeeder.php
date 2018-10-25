<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CasesTableSeeder::class);
        $this->call(OrganizationTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EstateTableSeeder::class);
        $this->call(DebtTableSeeder::class);
    }
}
