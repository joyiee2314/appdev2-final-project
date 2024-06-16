<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        $subjects = [
            'Mathematics', 'Science', 'History', 'Geography', 'English', 
            'Physical Education', 'Art', 'Music', 'Biology', 'Chemistry', 
            'Physics', 'Computer Science'
        ];

        return [
            'name' => $this->faker->randomElement($subjects),
        ];
    }
}
