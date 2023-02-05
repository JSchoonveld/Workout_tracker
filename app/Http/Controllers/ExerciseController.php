<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Set;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercises = Exercise::all();

        return Inertia::render('exercises/Exercises', [
            'exercises' => $exercises
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function show(Exercise $exercise)
    {
//        $exercise = Exercise::find(7);
//        $sets = Set::where('exercise_id', $exercise->id)->where('workout_id', '1')->get();
//
//        $labels = [];
//        $data = [];
//
//        foreach ($sets as $set) {
//            $date = $set->created_at->format('d-m-Y');
//            if (!in_array($date, $labels)) {
//                $labels[] = $date;
//            }
//            if (!isset($data[$date])) {
//                $data[$date] = 0;
//            }
//            $data[$date] += 1;
//        }
//
//        $chartData = [
//            'labels' => $labels,
//            'datasets' => [
//                [
//                    'data' => array_values($data),
//                ],
//            ],
//        ];

        return Inertia::render('exercises/Show', [
            'exercise' => $exercise
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function edit(Exercise $exercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exercise $exercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exercise $exercise)
    {
        //
    }
}
