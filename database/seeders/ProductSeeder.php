<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'HP Lapy ',
            'price'=>'$300',
            'category'=>'Laptop',
            'description'=>'High quality mobile 8gb Ram 64gb ROM',
            'gallery'=>'asset/laptop/3(1).jpg',
            ]);
            DB::table('products')->insert([
                'name'=>'HP Lapy ',
                'price'=>'$300',
                'category'=>'Laptop',
                'description'=>'High quality mobile 8gb Ram 64gb ROM',
                'gallery'=>'asset/laptop/3(2).jpg',
                ]);
                DB::table('products')->insert([
                    'name'=>'HP Lapy ',
                    'price'=>'$300',
                    'category'=>'Laptop',
                    'description'=>'High quality mobile 8gb Ram 64gb ROM',
                    'gallery'=>'asset/laptop/3(4).jpg',
                    ]);
                    DB::table('products')->insert([
                        'name'=>'HP Lapy ',
                        'price'=>'$300',
                        'category'=>'Laptop',
                        'description'=>'High quality mobile 8gb Ram 64gb ROM',
                        'gallery'=>'asset/laptop/3(5).jpg',
                        ]);
                        DB::table('products')->insert([
                            'name'=>'HP Lapy ',
                            'price'=>'$300',
                            'category'=>'Laptop',
                            'description'=>'High quality mobile 8gb Ram 64gb ROM',
                            'gallery'=>'asset/laptop/3(6).jpg',
                            ]);
                            DB::table('products')->insert([
                                'name'=>'HP Lapy ',
                                'price'=>'$300',
                                'category'=>'Laptop',
                                'description'=>'High quality mobile 8gb Ram 64gb ROM',
                                'gallery'=>'asset/laptop/3(7).jpg',
                                ]);
    }
}
