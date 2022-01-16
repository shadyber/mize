<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word,
            'photo'=>$this->faker->imageUrl(640,480,'culture'),
            'detail'=>$this->faker->sentence,
        ];
    }
}
