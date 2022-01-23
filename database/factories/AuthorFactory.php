<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\This;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name
        ];
    }
}
