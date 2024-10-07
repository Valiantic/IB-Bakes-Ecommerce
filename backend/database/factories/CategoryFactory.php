<?php

namespace Database\Factories;

//IMPORT THIS DUE TO CATEGORY CLASS BEING USE
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Category::class;
    
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->name(),
            'product_description' => $this->faker->sentence(),
        ];
    }
}
