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
            'small_description' =>$faker->sentence($nbWords = 20, $variabl5NbWords = true),            
            'description' => $faker->sentence($nbWords = 40, $variabl8NbWords = true),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Hp oppo A3s Second (Kualitas Masih Bagus) ',
            'brand' => 'Oppo',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Radio FM Pakai Baterai ',
            'brand' => 'Arstore',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Laptop Asus Ram 2 gb Baru Original Resmi',
            'brand' => 'Asus',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Hp Iphone 8 second (kualitas Terjamin) Garansi Toko',
            'brand' => 'Iphone',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Camera dlsr Murah Meriah',
            'brand' => 'Eiger',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Camera cctv terbaru 2023 Terlaris',
            'brand' => 'Rans',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Tv Samsung Terbaru Lcd dengan youtube',
            'brand' => 'Samsung',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Tv Lcd Terbaru terlaris',
            'brand' => 'Polytron',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Stick Gaem Ps 3 (baru) Original resmi',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Jam Tangan Watch Terbaru Dan terlaris di 2020 Original',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Senter Untuk Jarak Jauh Terlaris',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Handset Jbl dengan suara yang keras terbaru dan terlaris',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'laptop Hp ram 4gb ssd 125 windows 11 terbaru dan terlaris',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Sepeda duduk Viral 2023 gratis ongkir',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'jam alarm merk adidas garansi toko 1 tahun (cod)',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Lampu meja dengan baterai terbaru dan terlaris',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Stick ps 5 tanpa kabel original resmi',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(100000,260000),
            'selling_price' => $faker->numberBetween(50000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'Baru Realme Smart Tv 50 Inch / 43 Inch / 32 Inch Garansi Resmi',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'TERBARU 2022 DIGITAL TELEVISI LED 22 INCH HD TELEVISI GARANSI 2 TAHUN',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'HP Smartphone i13 Pro Max RAM 12GB+512GB Handphone Murah Android Ponsel Baru 7',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
        Product::create([
            'category_id'=> $faker->numberBetween(1,10),
            'name' => 'haloo',
            'brand' => 'Adidas',
            'small_description' =>$faker->sentence($nbWords = 50, $variableNbWords = true),
            'description' => $faker->sentence($nbWords = 80, $variableNbWords = true),
            'slug' => Str::random(35),
            'original_price' => $faker->numberBetween(55000,260000),
            'selling_price' => $faker->numberBetween(80000,100000),
            'meta_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
            'meta_keyword' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
            'meta_description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            'quantity'=> $faker->numberBetween(30,100),
        ]);
    }
}