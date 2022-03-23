<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word,
            'slug'=>$this->faker->word,
            'detail'=>$this->faker->sentence,
            'photo'=>'/images/placeholder2.jpg',
            'thumb'=>'/images/placeholder.jpg',
            'color'=>$this->faker->colorName,
            'width'=>$this->faker->numberBetween(1,100),
            'height'=>$this->faker->numberBetween(1,100),
            'diameter'=>$this->faker->numberBetween(1,100),
            'weight'=>$this->faker->numberBetween(10,92322),
            'price'=>180.01,
            'item_category_id'=>$this->faker->numberBetween(1,3),
            'user_id'=>$this->faker->numberBetween(1,2),
            'visit'=>$this->faker->numberBetween(1,300),
        ];
    }
}
