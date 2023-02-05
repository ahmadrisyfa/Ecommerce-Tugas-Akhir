<?php

namespace Database\Seeders;

use DB;
use App\Models\Product; 
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

      
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Hp Samsung J2 Original Terbaru 2023',
            'brand' => 'Samsung',
            'small_description' =>$faker->sentence($nbWords = 20, $variableNbWords = true),            
            'description' => $faker->sentence($nbWords = 40, $variableNbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(35000,260000),
            'selling_price' => $faker->numberBetween(15000,20000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Hp oppo A3s Second (Kualitas Masih Bagus) ',
            'brand' => 'Oppo',
            'small_description' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 40, $variableNbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(35000,260000),
            'selling_price' => $faker->numberBetween(15000,20000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Radio FM Pakai Baterai ',
            'brand' => 'Arstore',
            'small_description' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 40, $variableNbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(35000,260000),
            'selling_price' => $faker->numberBetween(15000,20000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Laptop Asus Ram 2 gb Baru Original Resmi',
            'brand' => 'Asus',
            'small_description' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 40, $variableNbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(35000,260000),
            'selling_price' => $faker->numberBetween(15000,20000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Hp Iphone 8 second (kualitas Terjamin) Garansi Toko',
            'brand' => 'Iphone',
            'small_description' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 40, $variableNbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(35000,260000),
            'selling_price' => $faker->numberBetween(15000,20000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Camera dlsr Murah Meriah',
            'brand' => 'Eiger',
            'small_description' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 40, $variableNbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(35000,260000),
            'selling_price' => $faker->numberBetween(15000,20000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Camera cctv terbaru 2023 Terlaris',
            'brand' => 'Rans',
            'small_description' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 40, $variableNbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(35000,260000),
            'selling_price' => $faker->numberBetween(15000,20000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Tv Samsung Terbaru Lcd dengan youtube',
            'brand' => 'Samsung',
            'small_description' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 40, $variableNbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(35000,260000),
            'selling_price' => $faker->numberBetween(15000,20000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Tv Lcd Terbaru terlaris',
            'brand' => 'Polytron',
            'small_description' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 40, $variableNbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(35000,260000),
            'selling_price' => $faker->numberBetween(15000,20000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Stick Gaem Ps 3 (baru) Original resmi',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 40, $variableNbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(35000,260000),
            'selling_price' => $faker->numberBetween(15000,20000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
    }
}