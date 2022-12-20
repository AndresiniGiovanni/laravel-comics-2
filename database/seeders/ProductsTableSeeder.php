<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('db_seeder');

        foreach ($products as $product) {

            $newproduct = new Product();
            $newproduct->title = $product['title'];
            $newproduct->description = $product['description'];
            $newproduct->thumb = $product['thumb'];
            $newproduct->price = $product['price'];
            $newproduct->series = $product['series'];
            $newproduct->sale_date = $product['sale_date'];
            $newproduct->type = $product['type'];
            $newproduct->artists = $product['artists'];
            $newproduct->writers = $product['writers'];
            $newproduct->save();
        }
    }
}
