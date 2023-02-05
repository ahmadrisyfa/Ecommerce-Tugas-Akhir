<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        Brand::create([
            'name' => 'Erigo',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Vans',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Nike',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Samsung',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Iphone',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Specs',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Puma',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Adidas',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Rans',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Nokia',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'kirunshop',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Arstore',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Kopiko',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Polytron',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Asus',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Oppo',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Indomie',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
        Brand::create([
            'name' => 'Eiger',
            'slug' => Str::random(35),
            'category_id'=> $faker->numberBetween(1,10),    	
        ]);
    }
}
