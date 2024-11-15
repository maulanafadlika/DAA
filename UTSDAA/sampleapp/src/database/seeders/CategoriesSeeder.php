<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        Categories::firstOrCreate(['name' => 'Main Course']);
        Categories::firstOrCreate(['name' => 'Beverage']);
        Categories::firstOrCreate(['name' => 'Dessert']);
    }
}
