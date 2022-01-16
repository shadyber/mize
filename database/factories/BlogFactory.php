<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->words(3,true),
            'tags' => $this->faker->words(3,true),
            'detail' => $this->faker->sentence(5,true),
            'photo' => $this->faker->imageUrl('1024','768'),
            'thumb' => $this->faker->imageUrl('640','480'),
            'user_id' => $this->faker->randomNumber(1,3),
            'blog_category_id' => $this->faker->randomNumber(1,2),
        ];
    }
}
