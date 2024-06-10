<?php

namespace Database\Factories;

use App\Models\ShortCourse;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShortCourse>
 */
class ShortCourseFactory extends Factory
{
    protected $model = ShortCourse::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'image_url' => $this->faker->imageUrl(400, 300, 'education', true),
            'content' => $this->faker->paragraphs(3, true),
            'description' => $this->faker->paragraphs(2, true),
            'date' => $this->faker->date,
            'time' => $this->faker->time,
            'benefit1' => $this->faker->sentence,
            'benefit2' => $this->faker->sentence,
            'benefit3' => $this->faker->sentence,
        ];
    }
}
