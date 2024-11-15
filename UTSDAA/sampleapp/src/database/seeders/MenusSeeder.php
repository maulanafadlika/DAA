<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusSeeder extends Seeder
{
    public function run(): void
    {
        $categoryMainCourseId = DB::table('categories')->where('name', 'Main Course')->value('id');
        $categoryBeverageId = DB::table('categories')->where('name', 'Beverage')->value('id');
        $categoryDessertId = DB::table('categories')->where('name', 'Dessert')->value('id');

        
        DB::table('menuses')->insert([
            [
                'name' => 'Fried Rice',
                'description' => 'Fried Rice With Egg .',
                'price' => 25,
                'category_id' => $categoryMainCourseId,  // Using the category ID for 'Makanan Utama'
                'image' => 'nasi_goreng.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Iced Tea',
                'description' => 'Iced Sweet Tea.',
                'price' => 5,
                'category_id' => $categoryBeverageId,  // Using the category ID for 'Minuman'
                'image' => 'es_teh.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ice Cream',
                'description' => 'Vanilla Ice Cream with Chocholate Topping.',
                'price' => 15,
                'category_id' => $categoryDessertId,  // Using the category ID for 'Dessert'
                'image' => 'es_krim.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
