<?php

use Illuminate\Database\Seeder;

class ItemsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('items')->insert([ //,
                'title' => $faker->name,
                'body' => $faker->text
            ]);
        }
    }
}
