<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class_datetime' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d H:i:s'),
            'class_location' => fake()->address,
            'teacher_id' => 1,
        ];
    }
}
