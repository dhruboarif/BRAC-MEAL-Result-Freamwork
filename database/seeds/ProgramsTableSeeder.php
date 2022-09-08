<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('programs')->insert([
            'name' => 'the brac',
            'type' => 'BRAC',
            'description' => 'Description',
            'user_id' => rand(1,10),
        ]);

        DB::table('programs')->insert([
            'name' => 'the COSS',
            'type' => 'CROSS',
            'description' => 'Description',
            'user_id' => rand(1,10),
        ]);

        DB::table('programs')->insert([
            'name' => 'the DEVELOPMENT',
            'type' => 'DEVELOPMENT',
            'description' => 'Description',
            'user_id' => rand(1,10),
        ]);

        DB::table('programs')->insert([
            'name' => 'the OTHERS',
            'type' => 'OTHERS',
            'description' => 'Description',
            'user_id' => rand(1,10),
        ]);*/

        $type=array("BRAC","CROSS","DEVELOPMENT","OTHERS");
        shuffle($type);

        $cat=array("PROGRAM","SUPPORT_FUNCTION");
        shuffle($cat);

        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index) {
            DB::table('programs')->insert([
                'name' => 'Program-'.$faker->unique()->time(),
                'type' => $type[rand(0,3)],
                'category' => $cat[rand(0,1)],
                'description' => $faker->sentence,
                'user_id' => rand(2,10),
            ]);
        }
    }
}
