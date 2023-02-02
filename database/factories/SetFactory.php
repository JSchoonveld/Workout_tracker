<?php

namespace Database\Factories;

use App\Models\Exercise;
use App\Models\Workout;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Set>
 */
class SetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'workout_id' => Workout::class,
            'exercise_id' => Exercise::class,
            'reps' => rand(5,20)
        ];
    }
}
