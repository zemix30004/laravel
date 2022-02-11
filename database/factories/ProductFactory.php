<?php

namespace Database\Factories;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->realText(rand(40, 50));
        return [
            'category_id' => rand(1, 4),
            'brand_id' => rand(1, 4),
            'name' => $name,
            'content' => $this->faker->realText(rand(400, 500)),
            'slug' => Str::slug($name),
            'price' => rand(1000, 2000),
        ];
    }
}
