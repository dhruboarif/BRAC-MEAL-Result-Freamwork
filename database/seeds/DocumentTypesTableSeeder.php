<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DocumentTypesTableSeeder extends Seeder
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
            DB::table('document_types')->insert([
                'name' => 'Document-'.$faker->unique()->time(),
                'description' => $faker->userName,
                'user_id' => rand(2,10),
            ]);
        }
    }
}
