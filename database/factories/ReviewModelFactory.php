<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReviewModel>
 */
class ReviewModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user'=> $this->faker->firstName,
            'title' =>$this->faker->sentence,
            'rate' => \rand(1,5),
            'comment' =>$this->faker->text,
        ];
    }
}
