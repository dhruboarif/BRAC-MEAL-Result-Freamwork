<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SupportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,10) as $index) {
            DB::table('supports')->insert([
                'name' => 'Support-'.$faker->unique()->time(),
                'description' => $faker->sentence,
                'user_id' => rand(1,10),
            ]);
        }
    }
}
