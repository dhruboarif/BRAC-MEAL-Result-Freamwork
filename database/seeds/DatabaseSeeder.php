<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(ThematicsTableSeeder::class);
         $this->call(SupportsTableSeeder::class);
         $this->call(ProgramsTableSeeder::class);
         $this->call(DonorsTableSeeder::class);
         $this->call(DocumentTypesTableSeeder::class);
    }
}
