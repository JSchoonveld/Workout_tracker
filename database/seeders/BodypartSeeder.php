<?php

namespace Database\Seeders;

use App\Models\Bodypart;
use Illuminate\Database\Seeder;

class BodypartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bodypart::factory()->create([
            'name' => 'chest'
        ]);
        Bodypart::factory()->create([
            'name' => 'triceps'
        ]);
        Bodypart::factory()->create([
            'name' => 'upper back'
        ]);
        Bodypart::factory()->create([
            'name' => 'lower back'
        ]);
        Bodypart::factory()->create([
            'name' => 'biceps'
        ]);
        Bodypart::factory()->create([
            'name' => 'shoulders'
        ]);
        Bodypart::factory()->create([
            'name' => 'quadriceps'
        ]);
        Bodypart::factory()->create([
            'name' => 'hamstrings'
        ]);
        Bodypart::factory()->create([
            'name' => 'calves'
        ]);
    }
}
