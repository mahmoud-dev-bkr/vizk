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
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('slug')->nullable();
            $table->foreignId('course_id')->constrained('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('lisson_id')->constrained('lessons')->onUpdate('cascade')->onDelete('cascade');
            // type = video of pdf or question
            $table->string('type')->default('video');
            $table->string('file')->nullable();
            $table->foreignId('quiz_id')->constrained('quizzes')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('lecture_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lecture_id')->constrained();
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->unique(['lecture_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
