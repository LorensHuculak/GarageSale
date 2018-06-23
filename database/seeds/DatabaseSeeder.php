<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            ['id' => '1', 'category' => 'Clothes'],
            ['id' => '2', 'category' => 'Electronics'],
            ['id' => '3', 'category' => 'Toys & Games'],
            ['id' => '4', 'category' => 'Power Tools'],
            ['id' => '5', 'category' => 'Jewelry'],
            ['id' => '6', 'category' => 'Books']

        ]);
    }
}
