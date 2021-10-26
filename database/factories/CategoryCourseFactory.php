<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\CategoryCourse;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryCourse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course'=>Course::factory(1)->create()->first(),
            'category'=>Category::factory(1)->create()->first(),
        ];
    }
}
