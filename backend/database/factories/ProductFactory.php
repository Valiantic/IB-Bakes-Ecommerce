<?php

namespace Database\Factories;

//IMPORT THIS DUE TO CATEGORY CLASS BEING USE
use App\Models\Category;
//IMPORT THIS DUE TO PRODUCT CLASS BEING USE
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(rand(2, 4)),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'description' => $this->faker->paragraph(rand(1, 3)),
        ];
    }

}
