<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradeDistribution extends Model
{

    protected $primaryKey = 'distribution_id';
    protected $fillable = ['course_id', 'total_grade', 'midterm_grade', 'practical_grade', 'year_work_grade', 'final_grade', 'is_active'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
