<?php

namespace Database\Factories;

use App\Models\StudentExchange;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentExchange>
 */
class StudentExchangeFactory extends Factory
{
    protected $model = StudentExchange::class;
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
            'image_url' => $this->faker->imageUrl(640, 480, 'education', true),
            'content' => $this->faker->paragraph,
            'time' => $this->faker->dateTimeThisYear->format('Y-m-d H:i:s'),
            'program_details' => $this->faker->paragraphs(3, true),
            'date' => $this->faker->date,
            'benefit' => $this->faker->sentence,
            'description' => $this->faker->paragraphs(3, true),
        ];
    }
}
