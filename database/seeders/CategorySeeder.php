<?php

namespace Database\Seeders;

use DB;
use App\Models\Category;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        Category::create([
            'name' => 'Handphone',
            'slug' => Str::random(35),
    		'description' =>$faker->sentence($nbWords = 30, $variableNbWords = true),
            'image' => 'uploads/category/digital_05.jpg',
    		'meta_title' =>$faker->sentence($nbWords = 8, $variableNbWords = true),
        ]);
        Category::create([
            'name' => 'Kaos Polos',
            'slug' => Str::random(35),
    		'description' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
            'image' => 'uploads/category/fashion_07.jpg',
    		'meta_title' =>$faker->sentence($nbWords = 8, $variableNbWords = true),
        ]);
        Category::create([
            'name' => 'Jacket Coach',
            'slug' => Str::random(35),
    		'description' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
            'image' => 'uploads/category/fashion_09.jpg',
    		'meta_title' =>$faker->sentence($nbWords = 8, $variableNbWords = true),
        ]);
        Category::create([
            'name' => 'Tas Sekolah',
            'slug' => Str::random(35),
    		'description' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
            'image' => 'uploads/category/fashion_02.jpg',
    		'meta_title' =>$faker->sentence($nbWords = 8, $variableNbWords = true),
        ]);
        Category::create([
            'name' => 'Laptop',
            'slug' => Str::random(35),
    		'description' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
            'image' => 'uploads/category/digital_14.jpg',
    		'meta_title' =>$faker->sentence($nbWords = 8, $variableNbWords = true),
        ]);
        Category::create([
            'name' => 'Televisi',
            'slug' => Str::random(35),
    		'description' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
            'image' => 'uploads/category/digital_08.jpg',
    		'meta_title' =>$faker->sentence($nbWords = 8, $variableNbWords = true),
        ]);
        Category::create([
            'name' => 'Lampu',
            'slug' => Str::random(35),
    		'description' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
            'image' => 'uploads/category/furniture_07.jpg',
    		'meta_title' =>$faker->sentence($nbWords = 8, $variableNbWords = true),
        ]);
        Category::create([
            'name' => 'Kasur',
            'slug' => Str::random(35),
    		'description' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
            'image' => 'uploads/category/furniture_06.jpg',
    		'meta_title' =>$faker->sentence($nbWords = 8, $variableNbWords = true),
        ]);
        Category::create([
            'name' => 'Kursi',
            'slug' => Str::random(35),
    		'description' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
            'image' => 'uploads/category/furniture_05.jpg',
    		'meta_title' =>$faker->sentence($nbWords = 8, $variableNbWords = true),
        ]);
        Category::create([
            'name' => 'Obat - Obatan',
            'slug' => Str::random(35),
    		'description' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
            'image' => 'uploads/category/organics_spa_4.jpg',
    		'meta_title' =>$faker->sentence($nbWords = 8, $variableNbWords = true),
        ]);


    }
}
