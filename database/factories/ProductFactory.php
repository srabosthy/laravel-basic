<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = Category::pluck('id')->toArray();
        return [
            'name' => $this->faker->numerify('product###'),
            'details' => $this->faker->text($maxNbChars = 40),
            'price' => $this->faker->numberBetween($min = 1000, $max = 1500),
            'status' => True,
            'category_id' => $this->faker->randomElement($categories),
        ];
    }
}
