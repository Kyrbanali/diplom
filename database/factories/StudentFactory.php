<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        $userIds = User::pluck('id')->unique();

        return [
            'student_id_number' => fake()->unique()->numerify('st######'),
            'user_id' => fake()->randomElement($userIds),
            'group_id' => 1,
        ];
    }
}
