<?php

namespace Database\Seeders;

//IMPORT THIS DUE TO CATEGORY CLASS BEING USE
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = Category::all();
        $categories->each(function($category){
            \App\Models\Product::factory()->count(4)->create([
                'category_id' => $category->id
            ]);
        });
    }

}
 