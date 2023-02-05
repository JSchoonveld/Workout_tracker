<?php

namespace Database\Seeders;

use App\Models\Bodypart;
use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Webmozart\Assert\Tests\StaticAnalysis\length;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bodypartNames = Bodypart::pluck('name')->toArray();

        for ($i = 0; $i < 20; $i++) {
            $randomBodypartKeys = array_rand($bodypartNames, rand(1, 2));
            $randomBodypartKeys = (array) $randomBodypartKeys;

            $randomBodypartNames = array_map(function($key) use ($bodypartNames) {
                return $bodypartNames[$key];
            }, $randomBodypartKeys);

            if (is_array($randomBodypartNames)) {
                Exercise::factory()->create([
                    'bodyparts' => json_encode($randomBodypartNames),
                ]);
            } else {
                Exercise::factory()->create([
                    'bodyparts' => json_encode([$randomBodypartNames]),
                ]);
            }

        }
    }
}
