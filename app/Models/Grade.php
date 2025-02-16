<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $primaryKey = 'grade_id';
    protected $fillable = ['student_id', 'course_id', 'midterm_grade', 'practical_grade', 'year_work_grade', 'final_grade', 'total_grade'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
