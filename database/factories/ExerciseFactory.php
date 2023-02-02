<?php

namespace Database\Factories;

use App\Enums\ExerciseTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use function MongoDB\BSON\toJSON;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(),
            'type' => ExerciseTypeEnum::toValues()[rand(0,1)],
            'categories' => json_encode(['chest', 'triceps']),
        ];
    }
}
