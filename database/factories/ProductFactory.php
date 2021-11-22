<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence($nbWords = 2, $variableNbWords = true);

        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->paragraph,
            'features' => json_encode(["model" => $this->faker->word()]),
            'sku' => Str::limit(strtoupper($name), 3, $this->faker->numerify('#######')),
            'price' => $this->faker->numberBetween($min = 35, $max = 100),
            'stock' => $this->faker->randomDigit(),
            'state' => 1,
            'image' => $this->faker->imageUrl($width = 300, $height = 300, 'food'),
            'shop_id' => 1,
            'category_id' =>  $this->faker->numberBetween($min = 1, $max = 5),
            'brand_id' => $this->faker->numberBetween($min = 1, $max = 30)
        ];
    }
}
