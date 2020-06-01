<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=30; $i++):
            DB::table('products')
                ->insert([
                    'name' => $faker->word,
                    'description' => $faker->words($nb = 20, $asText = true),
                    'price' => $faker->randomFloat($nbMaxDecimals = 3, $min = 1, $max = 1000),
                    'unit' => $faker->randomDigit,
                ]);
        endfor;
            
    }
}
