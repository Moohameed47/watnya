<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GPA extends Model
{
    protected $primaryKey = 'gpa_id';
    protected $fillable = ['student_id', 'term_id', 'gpa'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function term()
    {
        return $this->belongsTo(Term::class, 'term_id');
    }
}
