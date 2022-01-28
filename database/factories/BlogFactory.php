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
            'photo' =>'/images/placeholder1.jpg',
            'thumb' => '/images/placeholder.jpg',
            'user_id' => $this->faker->numberBetween(1,3),
            'blog_category_id' => $this->faker->numberBetween(1,2),
        ];
    }
}
