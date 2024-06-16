<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        $category = Category::inRandomOrder()->first();

        if (!$category) {
            throw new \Exception('No categories found. Please seed categories before seeding tasks.');
        }

        return [
            'title' => $this->faker->word . ' school task', // Generate a school task title
            'description' => 'Task description: ' . $this->faker->sentence, // Generate a task description
            'category_id' => $category->id, // Use existing category
            'due_date' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'status' => $this->faker->randomElement(['pending', 'completed']),
            'user_id' => User::factory(), // Assuming you have a User factory
        ];
    }
}
