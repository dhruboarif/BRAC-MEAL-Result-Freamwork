<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'N/A',
            'email' => 'sadmin@user.com',
            'password' => bcrypt('password'),
            'role' => 'super-admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@user.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'parent_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Supervisor',
            'email' => 'supervisor@user.com',
            'password' => bcrypt('password'),
            'role' => 'supervisor',
            'parent_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'General',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'role' => 'registered',
            'parent_id' => 2
        ]);

        $faker = Faker\Factory::create();
        foreach (range(5,10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->unique()->name,
                'email' => $faker->unique()->email,
                'password' => bcrypt('password'),
                'role' => 'registered',
                'parent_id' => 2
            ]);
        }

    }
}
