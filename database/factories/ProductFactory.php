<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->text(300),
            'price' => rand(100, 200),
            'heart' => $this->faker->boolean,
            'colors' => $this->faker->text(300),
            'slug' => $this->faker->text(30),
            'image' => $this->faker->imageUrl(),
            'promotion' => $this->faker->text(300),
        ];
    }
}
