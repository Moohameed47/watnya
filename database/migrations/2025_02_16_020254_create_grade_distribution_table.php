<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grade_distribution', function (Blueprint $table) {
            $table->id('distribution_id');
            $table->unsignedBigInteger('course_id');
            $table->float('total_grade');
            $table->float('midterm_grade');
            $table->float('practical_grade');
            $table->float('year_work_grade');
            $table->float('final_grade');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grade_distribution');
    }
};
