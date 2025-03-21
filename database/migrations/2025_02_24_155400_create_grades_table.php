<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->string('academic_year');
            $table->string('totalGradeChar')->nullable();
            $table->decimal('totalGrade', 5, 2)->nullable();
            $table->decimal('yearsWorkGrade', 5, 2)->nullable();
            $table->decimal('midtermGrade', 5, 2)->nullable();
            $table->decimal('finalGrade', 5, 2)->nullable();
            $table->decimal('practicalGrade', 5, 2)->nullable();
            $table->enum('gradeStatus', ['ff*', 'i*', 'i', 'others'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
