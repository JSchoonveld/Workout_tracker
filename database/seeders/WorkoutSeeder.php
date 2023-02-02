<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\Set;
use App\Models\User;
use App\Models\Workout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(5)->create()->each(function($user) {
            Workout::factory()->count(5)->create([
                'user_id' => $user->id,
            ])->each(function($workout){
                Set::factory()->count(rand(15, 25))->create([
                    'workout_id' => $workout->id,
                    'exercise_id' => Exercise::all()->random()->id,
                ]);
            });
        });
    }
}
