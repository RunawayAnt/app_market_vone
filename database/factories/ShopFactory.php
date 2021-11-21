<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();

        return [
            'shopname' => $name,
            'slug' => Str::slug($name, '-'),
            'ruc' => $this->faker->numerify('20#######'),
            'description' => $this -> faker-> paragraph(),
            'logo' => $this->faker->imageUrl($width = 300, $height = 300, 'food') ,
            'email' => null,
            'linkssocial' => null,
            'phone' => '+51 944 947 498',
            'user_id' => 3,
            'section_id' => 1,
        ];
    }
}
