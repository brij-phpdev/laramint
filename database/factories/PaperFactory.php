<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Course;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paper>
 */
class PaperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => 'Paper ' . $this->faker->unique()->name(),
            'name' => $this->faker->text(),
            'description' => $this->faker->text(),
            'image' => 'file.png',
            'is_published' => true,
            'department_id' => Department::factory(),
            'course_id' => Course::factory(),
        ];
    }
}
