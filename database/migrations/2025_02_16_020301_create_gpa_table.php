<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gpa', function (Blueprint $table) {
            $table->id('gpa_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('term_id');
            $table->float('gpa');
            $table->timestamps();

            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->foreign('term_id')->references('term_id')->on('terms')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gpa');
    }
};
