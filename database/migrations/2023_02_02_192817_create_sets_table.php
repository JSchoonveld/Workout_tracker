<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sets', function (Blueprint $table) {
            $table->id();
            $table->integer('reps')->default(0);
            $table->unsignedBigInteger('workout_id');
            $table->foreign('workout_id')->references('id')->on('workouts');
            $table->unsignedBigInteger('exercise_id');
            $table->foreign('exercise_id')->references('id')->on('exercises');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sets');
    }
};
